<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCustomerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer', function (Blueprint $table) {
           $table->increments('id');
           $table->string('first_name');
           $table->string('last_name');
           $table->string('email');
           $table->string('password');
           $table->string('country');
           $table->string('region');
           $table->string('zip');
           $table->string('phone');
           $table->string('dob');
           $table->string('gender');
           $table->longtext('billing_address1');
           $table->longtext('billing_address2');
           $table->text('tax_number');
           $table->string('state');
           $table->longtext('data');
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
        Schema::drop('customer');
    }
}
