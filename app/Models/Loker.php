<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Support\Carbon;

class Loker extends Model
{
    use HasFactory;

    protected $fillable = [
        'pekerjaan',
        'perusahaan_id',
        'lokasi',
        'deskripsi',
        'gaji',
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

    public function jenis_difabel()
    {
        return $this->belongsToMany(JenisDifabel::class,'loker_jenis_difabels');
    }

    public function getTglTutup()
    {
        return Carbon::parse($this->attributes['tgl_tutup'])
            ->translatedFormat('l, d F Y');
    }
}
