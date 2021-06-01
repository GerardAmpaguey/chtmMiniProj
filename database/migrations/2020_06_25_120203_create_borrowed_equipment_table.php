<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBorrowedEquipmentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
    {
        Schema::create('borrowed_equipment', function (Blueprint $table) {
            $table->increments('id');
            $table->date('date_borrowed');
            $table->time('time_borrowed');
            $table->date('date_returned')->nullable();
            $table->time('time_returned')->nullable();
            $table->string('return_status')->nullable();
            $table->unsignedInteger('equipment_id');
            $table->unsignedInteger('borrower_id');
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
        Schema::dropIfExists('borrowed_equipment');
    }
}
