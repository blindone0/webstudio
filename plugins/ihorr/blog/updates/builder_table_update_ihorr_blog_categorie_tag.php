<?php namespace Ihorr\Blog\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateIhorrBlogCategorieTag extends Migration
{
    public function up()
    {
        Schema::rename('ihorr_blog_posts2tags', 'ihorr_blog_categorie_tag');
    }
    
    public function down()
    {
        Schema::rename('ihorr_blog_categorie_tag', 'ihorr_blog_posts2tags');
    }
}
