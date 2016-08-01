<?php namespace Mesb\menu\Components;

use Cms\Classes\ComponentBase;
use Mesb\menu\Models\SubMenu as SubMenu;

class SubMenus extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'Submenu',
            'description' => 'Submenu for home page'
        ];
    }

    public function defineProperties()
    {
        return [
          'id' => [
            'title'        => 'SubMenus name',
            'description'  => 'SubMenus name',
            'type'         => 'dropdown'
            ],
          ];
    }

	public function onRender() {
        $submenu = new SubMenu;
        $this->submenus = $this->page['submenus'] = $submenu -> all();

        //from city id from flight
        $submenu = new SubMenu;
        $submenuCity = array();
        $submenus =  $submenu -> all();

        foreach ($submenus as $newSubmenu) {
            $submenuCity[$newSubmenu->id] = $newSubmenu->main_menu;
        }
       $this->submenuCity = $this->page['submenuCity'] = $submenuCity;
	}
	
    public function onRun()
    {
    }
}
