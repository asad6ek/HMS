<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTranzactionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tranzaction', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('pid');
            $table->date('tashrifsana');
            $table->integer('summ');
            $table->integer('tolangan');
            $table->integer('qarzdorlik');
            $table->integer('skidka');
            $table->integer('cheg_sum');
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
        Schema::dropIfExists('tranzaction');
    }
}
