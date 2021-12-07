<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ParentInformation extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('parent_information', function(Blueprint $table){
            $table->bigIncrements('id');
            $table->unsignedBigInteger('bio_id');
            $table->string('first_name');
            $table->string('middle_name')->nullable();
            $table->string('last_name');
            $table->integer('id_number');
            $table->string('gender');
            $table->string('occupation');
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
        Schema::dropIfExists('parent_information');
    }
}
