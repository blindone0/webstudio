<?php namespace Ihorr\Blog\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateIhorrBlogPosts extends Migration
{
    public function up()
    {
        Schema::create('ihorr_blog_posts', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('title');
            $table->text('content');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('ihorr_blog_posts');
    }
}
