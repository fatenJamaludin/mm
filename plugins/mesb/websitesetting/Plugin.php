<?php namespace Mesb\WebsiteSetting;

use System\Classes\PluginBase;
use Backend\Models\User;
use Backend;

class Plugin extends PluginBase
{
	public function pluginDetails()
    {
        return [
            'name' => 'WebsiteSetting',
            'description' => 'Website plugins to social media setting',
            'author' => 'Mesb',
            'icon' => 'icon-globe'
        ];
    }

    public function registerComponents()
    {
    	return [
          'Mesb\websitesetting\Components\Website' => 'website'
        ];
    }

    public function registerSettings()
    {
    }

    public function registerNavigation()
    {
        return [
            'websiteplugin' => [
                'label'       => 'Website Setting',
                'url'         => Backend::url('mesb/websitesetting/social'),
                'icon'        => 'icon-globe',
                'permissions' => ['websitesetting.*'],
                'order'       => 500,
            ]
        ];
    }
}
