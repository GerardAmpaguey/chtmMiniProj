<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBorrowedUtensilsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('borrowed_utensils', function (Blueprint $table) {
            $table->increments('id');
            $table->date('date_borrowed');
            $table->time('time_borrowed');
            $table->integer('quantity_borrowed');
            $table->date('date_returned')->nullable();
            $table->time('time_returned')->nullable();
            $table->integer('quantity_returned')->nullable();
            $table->unsignedInteger('utensil_id');
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
        Schema::dropIfExists('borrowed_utensils');
    }
}
