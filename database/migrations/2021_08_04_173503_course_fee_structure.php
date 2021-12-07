<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CourseFeeStructure extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('course_fee_structure', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('course_name');
            $table->unsignedBigInteger('course_id');
            $table->integer('semester');
            $table->integer('year');
            $table->integer('fee');

            $table->foreign('course_id')->references('id')->on('courses');
            
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
        Schema::dropIfExists('course_fee_structure');
    }
}
