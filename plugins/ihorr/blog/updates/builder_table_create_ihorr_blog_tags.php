<?php namespace Ihorr\Blog\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateIhorrBlogTags extends Migration
{
    public function up()
    {
        Schema::create('ihorr_blog_tags', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('tag');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('ihorr_blog_tags');
    }
}
