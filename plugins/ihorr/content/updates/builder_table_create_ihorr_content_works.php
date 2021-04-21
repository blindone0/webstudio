<?php namespace Ihorr\Content\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateIhorrContentWorks extends Migration
{
    public function up()
    {
        Schema::create('ihorr_content_works', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('url');
            $table->string('img');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('ihorr_content_works');
    }
}
