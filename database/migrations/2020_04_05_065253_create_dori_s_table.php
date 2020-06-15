<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDoriSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dori_s', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('pid');
            $table->string('dori_nomi',100);
            $table->integer('s_summ');
            $table->date('sana');
            $table->integer('ol_summ');
            $table->integer('dona');
            $table->integer('d_baxosi');
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
        Schema::dropIfExists('dori_s');
    }
}
