<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Courses extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('courses', function(Blueprint $table){
            $table->bigIncrements('id');
            $table->string('photo');
            $table->string('name');
            $table->string('professor');
            $table->integer('duration');
            $table->string('state');
            $table->string('department');
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
        Schema::dropIfExists('courses');
    }
}
