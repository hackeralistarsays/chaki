<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Students extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('first_name');
            $table->string('middle_name');
            $table->string('last_name');
            $table->string('regno')->unique();
            $table->string('email')->unique();
            $table->string('password');
            $table->date('date_of_admission');
            $table->string('gender');
            $table->string('DOB')->nullable();
            $table->string('birth_cert_no')->nullable();
            $table->string('id_no')->nullable();
            $table->string('religion');
            $table->integer('kcse_index_no')->nullable();
            $table->string('residence')->nullable();
            $table->string('course');
            $table->string('nationality');
            $table->mediumText('profile_pic')->nullable();
            $table->integer('year_of_study')->default(1);
            $table->integer('semester')->default(1);
            $table->string('status')->default('active');
            $table->date('date_left')->nullable();
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
        Schema::dropIfExists('students');
    }
}
