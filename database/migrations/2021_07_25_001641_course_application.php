<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CourseApplication extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('course_applications', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('applicant_name');
            $table->string('email');
            $table->integer('id_number')->unique();
            $table->unsignedBigInteger('course_id');
            $table->string('state')->default('incomplete');
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
        Schema::dropIfExists('course_applications');
    }
}
