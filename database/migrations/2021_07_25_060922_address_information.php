<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddressInformation extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('address_information', function(Blueprint $table){
            $table->bigIncrements('id');
            $table->unsignedBigInteger('bio_id');
            $table->string('county');
            $table->string('town');
            $table->string('street');
            $table->string('home_address');
            $table->integer('box');
            $table->string('postal_code');
            $table->string('phone_number_1');
            $table->string('phone_number_2')->nullable();
            $table->string('home_number');
            $table->timestamps();
            $table->foreign('bio_id')
                  ->references('id')->on('bio_information')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('address_information');
    }
}
