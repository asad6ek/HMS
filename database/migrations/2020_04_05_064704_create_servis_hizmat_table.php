<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServisHizmatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('servis_hizmat', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('pid');
            $table->string('servis_turi');
            $table->integer('summa');
            $table->integer('cheg')->default(0);
            $table->integer('cheg_sum')->default(0);
            $table->string('dok_name',50);
            $table->date('tashrifsana');


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
        Schema::dropIfExists('servis_hizmat');
    }
}
