<?php namespace Ihorr\Content\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateIhorrContentServicesTags extends Migration
{
    public function up()
    {
        Schema::create('ihorr_content_services_tags', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('services_id')->unsigned();
            $table->integer('tags_id')->unsigned();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('ihorr_content_services_tags');
    }
}
