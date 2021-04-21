<?php namespace Ihorr\Blog\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateIhorrBlogPosts2tags extends Migration
{
    public function up()
    {
        Schema::create('ihorr_blog_posts2tags', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('tag_id')->unsigned();
            $table->integer('categorie_id')->unsigned();
            $table->primary(['tag_id','categorie_id']);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('ihorr_blog_posts2tags');
    }
}
