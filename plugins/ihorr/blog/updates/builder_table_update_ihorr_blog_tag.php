<?php namespace Ihorr\Blog\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateIhorrBlogTag extends Migration
{
    public function up()
    {
        Schema::rename('ihorr_blog_tags', 'ihorr_blog_tag');
    }
    
    public function down()
    {
        Schema::rename('ihorr_blog_tag', 'ihorr_blog_tags');
    }
}
