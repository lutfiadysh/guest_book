<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTestimoniTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('testimoni', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('r_number');
            $table->string('instansi');
            $table->string('name');
            $table->string('phone');
            $table->string('email');
            $table->string('testimoni');
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
        Schema::dropIfExists('testimoni');
    }
}
