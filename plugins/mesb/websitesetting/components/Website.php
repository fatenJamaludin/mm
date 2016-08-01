<?php namespace Mesb\websitesetting\Components;

use Cms\Classes\ComponentBase;
use Mesb\websitesetting\Models\Social as Social;

class Website extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'Website',
            'description' => 'Website for home page'
        ];
    }

    public function defineProperties()
    {
        return [
          'id' => [
            'title'        => 'Website name',
            'description'  => 'Website name',
            'type'         => 'dropdown'
            ],
          ];
    }

	public function onRender() {
        $social = new Social;
        $this->socials = $this->page['socials'] = $social -> all();
	}
	
    public function onRun()
    {
    }
}
