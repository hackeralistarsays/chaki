<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFeeItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fee_items', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('courses_id');
            $table->unsignedBigInteger('fee_structure_id');
            $table->string('name');
            $table->decimal('amount', 15, 2);
            $table->string('status')->default('required');
            $table->timestamps();

            $table->foreign('courses_id')->references('id')->on('courses')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('fee_structure_id')->references('id')->on('fee_structures')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fee_items');
    }
}
