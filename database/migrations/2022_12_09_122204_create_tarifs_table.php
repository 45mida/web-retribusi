<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTarifsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tarifs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('dinasopd_id');
            $table->text('jns_layanan');
            $table->string('satuan');
            $table->string('tarif_layanan')->nullable();
            $table->string('tarif_saranan')->nullable();
            $table->string('tarif_total');
            $table->string('foto_objek')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tarifs');
    }
}