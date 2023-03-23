<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProfilDesa extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_desa',
        'email_desa', 
        'alamat_kantor',
        'nomor_surat',
        'nama_kepala_desa',
        'telp',
        'website_desa',
        'logo',
    ];
}
