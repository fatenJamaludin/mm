<?php namespace Mesb\Menu\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateMesbMenuSubmenu extends Migration
{
    public function up()
    {
        Schema::create('mesb_menu_submenu', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('main_menu', 100);
            $table->string('submenu', 100);
            $table->string('url', 150);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('mesb_menu_submenu');
    }
}
