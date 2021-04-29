<?php namespace Ihorr\Content\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateIhorrContentServicesTags extends Migration
{
    public function up()
    {
        Schema::table('ihorr_content_services_tags', function($table)
        {
            $table->renameColumn('services_id', 'service_id');
        });
    }
    
    public function down()
    {
        Schema::table('ihorr_content_services_tags', function($table)
        {
            $table->renameColumn('service_id', 'services_id');
        });
    }
}
