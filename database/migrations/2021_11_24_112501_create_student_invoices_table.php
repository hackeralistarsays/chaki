<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_invoices', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('student_id');
            $table->unsignedBigInteger('nominal_roll_id');
            $table->string('serial');
            $table->double('amount', 15, 2);
            $table->string('status');
            $table->timestamps();

            $table->foreign('student_id')->references('id')->on('students')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('nominal_roll_id')->references('id')->on('nominal_rolls')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('student_invoices');
    }
}
