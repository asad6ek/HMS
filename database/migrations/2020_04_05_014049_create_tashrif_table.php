<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTashrifTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tashrif', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('pid');
            $table->date('tashrifsana');
            $table->integer('summ')->default(0);
            $table->integer('tolangan')->default(0);
            $table->integer('qarzdorlik')->default(0);
            $table->integer('skidka')->default(0);
            $table->integer('cheg_sum')->default(0);
            $table->string('dok_name',50);
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
        Schema::dropIfExists('tashrif');
    }
}
