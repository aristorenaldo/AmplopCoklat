<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Loker extends Model
{
    use HasFactory;

    protected $fillable = [
        'pekerjaan',
        'perusahaan_id',
        'lokasi',
        'deskripsi',
        'tgl_tutup'
    ];

    public function perusahaan()
    {
        return $this->belongsTo(Perusahaan::class,'perusahaan_id');
    }

    public function persyaratan()
    {
        return $this->hasMany(Persyaratan::class);
    }

    public function getTglTutup()
    {
        return Carbon::parse($this->attributes['tgl_tutup'])
            ->translatedFormat('l, d F Y');
    }
}
