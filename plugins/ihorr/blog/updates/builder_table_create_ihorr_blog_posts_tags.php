<?php namespace Ihorr\Blog\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateIhorrBlogPostsTags extends Migration
{
    public function up()
    {
        Schema::create('ihorr_blog_posts_tags', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('posts_id')->unsigned();
            $table->integer('tags_id')->unsigned();
            $table->primary(['posts_id','tags_id']);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('ihorr_blog_posts_tags');
    }
}
