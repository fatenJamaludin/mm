<?php namespace Mesb\announcement\Components;

use Cms\Classes\ComponentBase;
use Mesb\announcement\Models\Announcement as Announcement;

class AnnouncementSlide extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'Announcement Slide',
            'description' => 'Announcement for home page'
        ];
    }

    public function defineProperties()
    {
        return [
          'id' => [
            'title'        => 'Announcement name',
            'description'  => 'Announcement name',
            'type'         => 'dropdown'
            ],
          ];
    }

	public function onRender() {
        $announcement = new Announcement;
        $this->announcements = $this->page['announcements'] = $announcement -> all();
	}
	
    public function onRun()
    {
		/*$this->addJs('/plugins/mesb/promoslider/assets/js/jquery.flexslider.js');
        $this->addCss('/plugins/mesb/promoslider/assets/css/flexslider.css');*/
    }
}
