<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Surat extends Model
{
    use HasFactory;

    protected $fillable = [
        'keperluan',
        'penduduk_id',
        'nomor_kk_pengaju', 
        'jenis_barang',
        'perkiraan_waktu',
        'perkiraan_tempat_kejadian',
        'tujuan_surat',
        'berlaku_selama',
        'dikeluarkan_di',
        'pada_tanggal',
        'saksi_1',
        'nik_saksi_1',
        'saksi_2',
        'nik_saksi_2',
        'status',
    ];

    public function penduduk()
    {
        return $this->belongsTo(Penduduk::class);
    }
}
