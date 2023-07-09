<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAjuansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ajuans', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('alamat');
            $table->string('organisasi');
            $table->string('lokasi');
            $table->string('nohp');
            $table->string('npwp')->nullable();
            $table->string('objek1');
            $table->string('objek2')->nullable();
            $table->string('objek3')->nullable();
            $table->string('objek4')->nullable();
            $table->string('vol1');
            $table->string('vol2')->nullable();
            $table->string('vol3')->nullable();
            $table->string('vol4')->nullable();
            $table->string('total');
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
        Schema::dropIfExists('ajuans');
    }
}