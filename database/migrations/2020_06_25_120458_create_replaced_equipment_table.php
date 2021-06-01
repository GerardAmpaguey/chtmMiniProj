<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReplacedEquipmentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
      public function up()
    {
        Schema::create('replaced_equipment', function (Blueprint $table) {
            $table->increments('id');
            $table->date('date_replaced');
            $table->time('time_replaced');
            $table->unsignedInteger('equipment_id');
            $table->unsignedInteger('borrowed_equipment_id');
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
        Schema::dropIfExists('replaced_equipment');
    }
}
