<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCashPaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cash_payments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('student_payment_id');
            $table->string('serial')->unique();
            $table->decimal('amount', 15, 2);
            $table->timestamps();

            $table->foreign('student_payment_id')->references('id')->on('student_payments')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cash_payments');
    }
}
