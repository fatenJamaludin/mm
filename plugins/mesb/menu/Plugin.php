<?php namespace Mesb\Menu;

use System\Classes\PluginBase;
use Backend\Models\User;
use Backend;

class Plugin extends PluginBase
{
	public function pluginDetails()
    {
        return [
            'name' => 'Menu',
            'description' => 'Menu plugins to manage menu and sebmenu',
            'author' => 'Mesb',
            'icon' => 'icon-list-ul'
        ];
    }

    public function registerComponents()
    {
    	return [
          'Mesb\menu\Components\SubMenus' => 'submenus'
        ];
    }

    public function registerSettings()
    {
    }

    public function registerNavigation()
    {
        return [
            'menuplugin' => [
                'label'       => 'Menu',
                'url'         => Backend::url('mesb/menu/submenu'),
                'icon'        => 'icon-list-ul',
                'permissions' => ['menu.*'],
                'order'       => 500,

                'sideMenu' => [
                    
                    'submenus' => [
                        'label'       => 'Submenu',
                        'icon'        => 'icon-leaf',
                        'url'         => Backend::url('mesb/menu/submenu/create'),
                        'permissions' => ['']
                    ]
                ]
            ]
        ];
    }
}
