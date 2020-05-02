<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateYotoqTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('yotoq', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('xona');
            $table->integer('orin');
            $table->integer('summ');
            $table->enum('status',[0,1])->default(0);
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
        Schema::dropIfExists('yotoq');
    }
}
