<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateYotoqHizmatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('yotoq_hizmat', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('pid');
            $table->integer('palata');
            $table->integer('yotoq');
            $table->date('kirgansana');
            $table->integer('kun');
            $table->integer('umsumm');
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
        Schema::dropIfExists('yotoq_hizmat');
    }
}
