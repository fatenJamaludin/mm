<?php namespace Mesb\WebsiteSetting\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateMesbWebsitesettingSocial extends Migration
{
    public function up()
    {
        Schema::create('mesb_websitesetting_social', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('facebook_url', 100);
            $table->string('twitter_url', 100);
            $table->string('instagram_url', 100);
            $table->string('youtube_url', 100);
            $table->string('google_play', 100);
            $table->string('itunes', 100);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('mesb_websitesetting_social');
    }
}
