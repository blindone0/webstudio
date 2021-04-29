<?php namespace Ihorr\Blog\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateIhorrBlogComments2 extends Migration
{
    public function up()
    {
        Schema::table('ihorr_blog_comments', function($table)
        {
            $table->string('post_id', 10);
        });
    }
    
    public function down()
    {
        Schema::table('ihorr_blog_comments', function($table)
        {
            $table->dropColumn('post_id');
        });
    }
}
