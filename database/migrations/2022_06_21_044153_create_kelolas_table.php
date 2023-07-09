<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKelolasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kelolas', function (Blueprint $table) {
            $table->id();
            $table->text('nama_dinasopd');
            $table->foreignId('jenis_id');
            $table->string('thn_anggaran');
            $table->string('target_anggaran');
            $table->string('foto_dinasopd')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kelolas');
    }
}