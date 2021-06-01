<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReplacedUtensilsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
   public function up()
    {
        Schema::create('replaced_utensils', function (Blueprint $table) {
            $table->increments('id');
            $table->date('date_replaced');
            $table->time('time_replaced');
            $table->integer('quantity');
            $table->text('remarks');
            $table->unsignedInteger('borrowed_utensil_id');
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
        Schema::dropIfExists('replaced_utensils');
    }
}