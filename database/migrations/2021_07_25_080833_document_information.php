<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DocumentInformation extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('documents_information', function(Blueprint $table){
            $table->bigIncrements('id');
            $table->unsignedBigInteger('bio_id');
            $table->string('result_slip');
            $table->string('copy_of_id');
            $table->string('living_cert');
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
    }
}
