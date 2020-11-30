<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubject1sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subject1s', function (Blueprint $table) {
            $table->id();
             $table->String('mamh');
            $table->String('name');
            $table->String('chungchi');
            $table->bigInteger('tinchi');
            $table->bigInteger('sotiethoc');
             $table->bigInteger('mabomon');
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
        Schema::dropIfExists('subject1s');
    }
}
