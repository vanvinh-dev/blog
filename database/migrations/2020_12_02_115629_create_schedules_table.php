<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSchedulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schedules', function (Blueprint $table) {
            $table->id();
            $table->String('mamh');
            $table->String('lophoc');
            $table->String('bachoc');
            $table->integer('syso');
            $table->String('diadiem');
             $table->bigInteger('mabomon');
             $table->integer('type');
             $table->String('timestart');
              $table->String('timend');
              $table->String('date');
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
        Schema::dropIfExists('schedules');
    }
}
