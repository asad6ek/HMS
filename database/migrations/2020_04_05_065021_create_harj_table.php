<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHarjTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('harj', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('harj_name',100);
            $table->integer('summ');
            $table->integer('soni')->default(0);
            $table->integer('um_summ');
            $table->timestamp('sana')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('harj');
    }
}
