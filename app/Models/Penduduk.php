<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penduduk extends Model
{
    use HasFactory;

    protected $fillable = [
        'nik', 
        'nama',
        'tempat_lahir',
        'tanggal_lahir',
        'umur',
        'jenis_kelamin',
        'dusun_id',
        'rw_id',
        'rt_id',
        'alamat_lengkap',
        'kebangsaan',
        'agama',
        'pekerjaan',
        'status_perkawinan',
        'pendidikan_dalam_kk',
    ];

    public function dusun()
    {
        return $this->belongsTo(Dusun::class);
    }

    public function rw()
    {
        return $this->belongsTo(Rw::class);
    }

    public function rt()
    {
        return $this->belongsTo(Rt::class);
    }

    public function surat()
    {
        return $this->hasMany(Surat::class);
    }

    public static function boot()
    {
        parent::boot();
        self::deleting(function ($penduduk) { 
            $penduduk->surat()->each(function ($surat) {
                $surat->delete();
            });
        });
        
    }
}
