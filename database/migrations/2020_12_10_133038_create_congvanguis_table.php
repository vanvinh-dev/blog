<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCongvanguisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('congvanguis', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('bomon');
            $table->bigInteger('giaovien');
            $table->bigInteger('idconvan');
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
        Schema::dropIfExists('congvanguis');
    }
}
