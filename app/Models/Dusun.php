<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dusun extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_dusun',
    ];

    public function rw()
    {
        return $this->hasMany(Rw::class);
    }

    public function penduduk()
    {
        return $this->hasMany(Penduduk::class);
    }
}
