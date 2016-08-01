<?php namespace Mesb\Announcement\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateMesbAnnouncementAnnouncements extends Migration
{
    public function up()
    {
        Schema::create('mesb_announcement_announcements', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('title', 100);
            $table->text('content');
            $table->string('url', 200);
            $table->dateTime('start_date')->default('0000-00-00 00:00:00');
            $table->dateTime('end_date')->default('0000-00-00 00:00:00');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('mesb_announcement_announcements');
    }
}
