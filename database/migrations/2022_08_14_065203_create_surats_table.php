<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('surats', function (Blueprint $table) {
            $table->id();
            $table->foreignId('penduduk_id');
            $table->foreignId('nomor_kk_pengaju');
            $table->string('keperluan');
            $table->string('jenis_barang');
            $table->string('perkiraan_waktu');
            $table->string('perkiraan_tempat_kejadian');
            $table->string('tujuan_surat');
            $table->string('berlaku_selama');
            $table->string('dikeluarkan_di');
            $table->date('pada_tanggal');
            $table->string('saksi_1');
            $table->string('nik_saksi_1');
            $table->string('saksi_2');
            $table->string('nik_saksi_2');
            $table->string('status')->default('menunggu');
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
        Schema::dropIfExists('surats');
    }
};
