<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatientTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('pname');
            $table->string('psurname');
            $table->string('yoshi')->nullable();
            $table->string('adress')->nullable();
            $table->string('tel')->nullable();
            $table->timestamp('kelgan_sana')->nullable();
            $table->string('dok_name',50)->nullable();
            $table->string('pnomer',10);
            $table->enum('status',[0,1])->default(0);



        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('patient');
    }
}
