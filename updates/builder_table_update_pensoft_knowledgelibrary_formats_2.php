<?php namespace Pensoft\Knowledgelibrary\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdatePensoftKnowledgelibraryFormats2 extends Migration
{
    public function up()
    {
        Schema::table('pensoft_knowledgelibrary_formats', function($table)
        {
            $table->integer('sort_order')->default(1)->change();
        });
    }
    
    public function down()
    {
        Schema::table('pensoft_knowledgelibrary_formats', function($table)
        {
            $table->integer('sort_order')->default(null)->change();
        });
    }
}
