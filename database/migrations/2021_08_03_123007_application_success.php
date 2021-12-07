<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ApplicationSuccess extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('application_success', function (Blueprint $table) {

            $table->bigIncrements('id');
            $table->unsignedBigInteger('course_id');
            $table->unsignedBigInteger('bio_id');
            $table->string('first_name');
            $table->string('middle_name');
            $table->string('last_name');
            $table->integer('id_number')->unique();
            $table->string('email');
            $table->string('state')->default('Pending');
            $table->timestamps();
            
            $table->foreign('course_id')
                  ->references('id')->on('courses');
            $table->foreign('bio_id')
                  ->references('id')->on('bio_information');
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
        Schema::dropIfExists('application_success');
    }
}
