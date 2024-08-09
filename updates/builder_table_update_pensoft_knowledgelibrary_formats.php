<?php namespace Pensoft\Knowledgelibrary\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdatePensoftKnowledgelibraryFormats extends Migration
{
    public function up()
    {
        Schema::table('pensoft_knowledgelibrary_formats', function($table)
        {
            $table->integer('sort_order');
        });
    }
    
    public function down()
    {
        Schema::table('pensoft_knowledgelibrary_formats', function($table)
        {
            $table->dropColumn('sort_order');
        });
    }
}
