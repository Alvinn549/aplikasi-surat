<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rw extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_rw',
        'dusun_id',
    ];

    public function dusun()
    {
        return $this->belongsTo(Dusun::class);
    }

    public function rt()
    {
        return $this->hasMany(Rt::class);
    }
    
    public function penduduk()
    {
        return $this->hasMany(Penduduk::class);
    }


}
