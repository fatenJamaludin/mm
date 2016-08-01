<?php namespace RainLab\Forum;

use Event;
use Backend;
use RainLab\User\Models\User;
use RainLab\Forum\Models\Member;
use System\Classes\PluginBase;
use RainLab\User\Controllers\Users as UsersController;
use RainLab\Forum\Models\Channel;

/**
 * Forum Plugin Information File
 */
class Plugin extends PluginBase
{
    public $require = ['RainLab.User'];

    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'rainlab.forum::lang.plugin.name',
            'description' => 'rainlab.forum::lang.plugin.description',
            'author'      => 'Alexey Bobkov, Samuel Georges',
            'icon'        => 'icon-comments',
            'homepage'    => 'https://github.com/rainlab/forum-plugin'
        ];
    }

    public function boot()
    {
        User::extend(function($model) {
            $model->hasOne['forum_member'] = ['RainLab\Forum\Models\Member'];

            $model->bindEvent('model.beforeDelete', function() use ($model) {
                $model->forum_member && $model->forum_member->delete();
            });
        });

        UsersController::extendFormFields(function($widget, $model, $context) {
            // Prevent extending of related form instead of the intended User form
            if (!$widget->model instanceof \RainLab\User\Models\User) return;
            if ($context != 'update') return;
            if (!Member::getFromUser($model)) return;

            $widget->addFields([
                'forum_member[username]' => [
                    'label'   => 'rainlab.forum::lang.settings.username',
                    'tab'     => 'Forum',
                    'comment' => 'rainlab.forum::lang.settings.username_comment'
                ],
                'forum_member[is_moderator]' => [
                    'label'   => 'rainlab.forum::lang.settings.moderator',
                    'type'    => 'checkbox',
                    'tab'     => 'Forum',
                    'span'    => 'auto',
                    'comment' => 'rainlab.forum::lang.settings.moderator_comment'
                ],
                'forum_member[is_banned]' => [
                    'label'   => 'rainlab.forum::lang.settings.banned',
                    'type'    => 'checkbox',
                    'tab'     => 'Forum',
                    'span'    => 'auto',
                    'comment' => 'rainlab.forum::lang.settings.banned_comment'
                ]
            ], 'primary');
        });

        UsersController::extendListColumns(function($widget, $model) {
            if (!$model instanceof \RainLab\User\Models\User) return;

            $widget->addColumns([
                'forum_member_username' => [
                    'label'      => 'rainlab.forum::lang.settings.forum_username',
                    'relation'   => 'forum_member',
                    'select'     => 'username',
                    'searchable' => false
                ]
            ]);
        });

        \Event::listen('offline.sitesearch.query', function ($query) {

        // Search your plugin's contents
        $forums = Channel::where('title', 'like', "%${query}%")
                                            ->orWhere('description', 'like', "%${query}%")
                                            ->get();                           
        // Now build a results array
        $results = [];
        foreach ($forums as $forum) {
            // Make this result more relevant if the query
            // is found in the result's title
            $relevance = stripos($forum->title, $query) !== false ? 2 : 1;

            $results[] = [
                'title'     => $forum->title,
                'text'      => $forum->description,
                'url'       => url('/forum/channel/' . $forum->slug),
                //'thumb'     => $forum->thumbnails->first(), // Instance of System\Models\File
                'relevance' => $relevance, // higher relevance results in a higher 
                                           // position in the results listing
            ];
        }

        return [
            'provider' => 'Document', // The badge to display for this result
            'results'  => $results,
        ];
    });
    }

    public function registerComponents()
    {
        return [
           '\RainLab\Forum\Components\Channels'     => 'forumChannels',
           '\RainLab\Forum\Components\Channel'      => 'forumChannel',
           '\RainLab\Forum\Components\Topic'        => 'forumTopic',
           '\RainLab\Forum\Components\Topics'       => 'forumTopics',
           '\RainLab\Forum\Components\Member'       => 'forumMember',
           '\RainLab\Forum\Components\EmbedTopic'   => 'forumEmbedTopic',
           '\RainLab\Forum\Components\EmbedChannel' => 'forumEmbedChannel'
        ];
    }

    public function registerSettings()
    {
        return [
            'settings' => [
                'label'       => 'rainlab.forum::lang.settings.channels',
                'description' => 'rainlab.forum::lang.settings.channels_desc',
                'icon'        => 'icon-comments',
                'url'         => Backend::url('rainlab/forum/channels'),
                'category'    => 'Forum',
                'order'       => 500
            ]
        ];
    }

    public function registerMailTemplates()
    {
        return [
            'rainlab.forum::mail.topic_reply' => 'Notification to followers when a post is made to a topic.',
            'rainlab.forum::mail.member_report' => 'Notification to moderators when a member is reported to be a spammer.'
        ];
    }
}
