<?php namespace Mesb\Announcement;

use System\Classes\PluginBase;
use Backend\Models\User;
use Backend;

class Plugin extends PluginBase
{
	public function pluginDetails()
    {
        return [
            'name' => 'Announcement',
            'description' => 'Announcement plugins to manage announcements',
            'author' => 'Mesb',
            'icon' => 'icon-bullhorn'
        ];
    }

    public function registerComponents()
    {
    	return [
          'Mesb\announcement\Components\AnnouncementSlide' => 'announcementslide'
        ];
    }

    public function registerSettings()
    {
    }

    public function registerNavigation()
    {
        return [
            'promoplugin' => [
                'label'       => 'Announcement',
                'url'         => Backend::url('mesb/announcement/announcement'),
                'icon'        => 'icon-bullhorn',
                'permissions' => ['announcement.*'],
                'order'       => 500,
            ]
        ];
    }
}
