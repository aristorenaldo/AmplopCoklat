<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Loker extends Model
{
    use HasFactory;

    protected $fillable = [
        'pekerjaan',
        'perusahaan_id',
        'lokasi',
        'deskripsi'
    ];

    public function perusahaan()
    {
        return $this->belongsTo(Perusahaan::class);
    }

    public function persyaratan()
    {
        return $this->hasMany(Persyaratan::class);
    }
}
