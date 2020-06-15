<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFirmalarTranzactionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('firmalar_tranzaction', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('f_name',100);
            $table->integer('ot_summ');
            $table->integer('ol_summ');
            $table->integer('qoldiq');
            $table->date('sana');
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
        Schema::dropIfExists('firmalar_tranzaction');
    }
}
