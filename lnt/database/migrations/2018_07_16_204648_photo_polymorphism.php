<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PhotoPolymorphism extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('photos' , function($table){
            $table->dropColumn('gallery_id');
            $table->integer('photoable_id');
            $table->string('photoable_type');
       });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        
        Schema::table('photos' , function($table){
            $table->dropColumn('photoable_id');
            $table->dropColumn('photoable_type');
       });
    }
}
