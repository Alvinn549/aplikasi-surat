<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rt extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_rt',
        'rw_id',
    ];

    public function rw()
    {
        return $this->belongsTo(Rw::class);
    }

    public function penduduk()
    {
        return $this->hasMany(Penduduk::class);
    }
}
