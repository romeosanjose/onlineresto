<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddHomePages extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('home',function(Blueprint $table){
         $table->increments('id');
         $table->string('title',255);
         $table->string('description',255);
         $table->string('type',255);
         $table->boolean('show')->default(true);
         $table->boolean('navigation')->default(false);
         $table->integer('position');
         $table->text('content');
         $table->timestamps();
     });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('home');
    }
}
