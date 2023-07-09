<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSTSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('s_t_s', function (Blueprint $table) {
            $table->id();
            $table->string('no_sts');
            $table->string('tgl_setor');
            $table->string('nama_setor');
            $table->foreignId('dinasopd_id');
            $table->foreignId('jenis_id');
            $table->string('norek_ret');
            $table->string('thn_anggaran');
            $table->string('jns_setor');
            $table->string('jml_nominal');
            $table->string('jml_huruf');
            $table->string('ket_sts');
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
        Schema::dropIfExists('s_t_s');
    }
}