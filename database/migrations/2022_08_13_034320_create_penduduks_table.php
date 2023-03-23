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
        Schema::create('penduduks', function (Blueprint $table) {
            $table->id();
            $table->string('nik');
            $table->string('nama');
            $table->string('tempat_lahir');
            $table->string('tanggal_lahir');
            $table->string('umur')->nullable();
            $table->string('jenis_kelamin');
            $table->foreignId('dusun_id')->nullable();
            $table->foreignId('rw_id')->nullable();
            $table->foreignId('rt_id')->nullable();
            $table->string('alamat_lengkap');
            $table->string('kebangsaan');
            $table->string('agama');
            $table->string('pekerjaan');
            $table->string('status_perkawinan');
            $table->string('pendidikan_dalam_kk');
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
        Schema::dropIfExists('penduduks');
    }
};
