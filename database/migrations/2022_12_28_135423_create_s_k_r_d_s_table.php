<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSKRDSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('s_k_r_d_s', function (Blueprint $table) {
            $table->id();
            $table->string('no_seri');
            $table->string('masa_ret');
            $table->string('thn_ret');
            $table->string('terbit_ret');
            $table->foreignId('jenis_id');
            $table->foreignId('dinasopd_id');
            $table->string('no_rek');
            $table->string('tempo_ret');
            $table->string('nama_pemesan');
            $table->string('org_pemesan');
            $table->string('alamat_pemesan');
            $table->string('npwp')->nullable();
            $table->string('objek1');
            $table->string('objek2')->nullable();
            $table->string('objek3')->nullable();
            $table->string('objek4')->nullable();
            $table->string('satuan1');
            $table->string('satuan2')->nullable();
            $table->string('satuan3')->nullable();
            $table->string('satuan4')->nullable();
            $table->string('vol1');
            $table->string('vol2')->nullable();
            $table->string('vol3')->nullable();
            $table->string('vol4')->nullable();
            $table->string('total');
            $table->string('total_huruf');
            $table->string('keterangan');
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
        Schema::dropIfExists('s_k_r_d_s');
    }
}