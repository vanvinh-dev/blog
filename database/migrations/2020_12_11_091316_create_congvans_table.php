<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCongvansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('congvans', function (Blueprint $table) {
            $table->id();
            $table->String('file');
            $table->String('Mota');
            $table->String('loaivb');
            $table->String('linhvuc');
            $table->String('ngaybanh');
            $table->String('ngayhieuluc');
            $table->String('status');
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
        Schema::dropIfExists('congvans');
    }
}
