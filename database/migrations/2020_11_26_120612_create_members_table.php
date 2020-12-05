<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->String('ma');
            $table->String('bachoc');
            $table->String('ten');
            $table->bigInteger('mabomon');
            $table->integer('heso');
            $table->integer('phucap');
            $table->String('chucvu');
            $table->timestamps();
            $table->String('email');
            $table->String('password');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('members');
    }
}
