<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AdminPayment extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admin_payment', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('type');
            $table->dateTime('from');
            $table->dateTime('to');
            $table->integer('amount');
            $table->string('status');
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
        Schema::dropIfExists('admin_payment');
    }
}
