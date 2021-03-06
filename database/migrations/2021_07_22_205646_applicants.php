<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Applicants extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('applicants', function(Blueprint $table){
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('email');
            $table->integer('id_number');
            $table->string('password');
            $table->string('email_verified')->nullable();
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
        //
        Schema::dropIfExists('applicants');
    }
}
