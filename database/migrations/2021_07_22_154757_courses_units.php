<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CoursesUnits extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('courses_units', function(Blueprint $table){
            $table->bigIncrements('id');
            $table->unsignedBigInteger('course_id');
            $table->string('qualification');
            $table->string('unit_name');
            $table->integer('year');
            $table->string('code');
            $table->timestamps();
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
        Schema::dropIfExists('courses_units');
    }
}
