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
        Schema::create('profil_desas', function (Blueprint $table) {
            $table->id();
            $table->string('nama_desa');
            $table->string('email_desa');
            $table->string('alamat_kantor');
            $table->string('nomor_surat');
            $table->string('nama_kepala_desa');
            $table->string('telp');
            $table->string('website_desa');
            $table->string('logo')->nullable();
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
        Schema::dropIfExists('profil_desas');
    }
};
