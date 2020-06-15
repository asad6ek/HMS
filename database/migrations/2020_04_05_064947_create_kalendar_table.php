<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKalendarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kalendar', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('ismi');
            $table->string('telefon');
            $table->double('soat');
            $table->date('tashrifsana');
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
        Schema::dropIfExists('kalendar');
    }
}
