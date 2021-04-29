<?php namespace Ihorr\Blog\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateIhorrBlogPostsCategories extends Migration
{
    public function up()
    {
        Schema::create('ihorr_blog_posts_categories', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('posts_id')->unsigned();
            $table->integer('categories_id')->unsigned();
            $table->primary(['posts_id','categories_id']);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('ihorr_blog_posts_categories');
    }
}
