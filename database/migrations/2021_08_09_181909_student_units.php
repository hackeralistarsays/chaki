<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class StudentUnits extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('student_units', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->year('year');
            $table->integer('semester');
            $table->string('unit_code');
            $table->string('unit_name');
            $table->string('cf');
            $table->unsignedBigInteger('student_id');
            $table->unsignedBigInteger('course_id');
            $table->timestamps();

            $table->foreign('student_id')
                  ->references('id')->on('students')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');
            $table->foreign('course_id')
                  ->references('id')->on('courses')
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
        Schema::dropIfExists('student_units');
    }
}
