<?php namespace Ihorr\Blog\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateIhorrBlogComments extends Migration
{
    public function up()
    {
        Schema::table('ihorr_blog_comments', function($table)
        {
            $table->string('author', 255);
            $table->text('text');
        });
    }
    
    public function down()
    {
        Schema::table('ihorr_blog_comments', function($table)
        {
            $table->dropColumn('author');
            $table->dropColumn('text');
        });
    }
}
