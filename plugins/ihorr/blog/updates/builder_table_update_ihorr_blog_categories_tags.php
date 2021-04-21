<?php namespace Ihorr\Blog\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateIhorrBlogCategoriesTags extends Migration
{
    public function up()
    {
        Schema::rename('ihorr_blog_categorie_tag', 'ihorr_blog_categories_tags');
    }
    
    public function down()
    {
        Schema::rename('ihorr_blog_categories_tags', 'ihorr_blog_categorie_tag');
    }
}
