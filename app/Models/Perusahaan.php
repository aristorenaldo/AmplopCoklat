<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perusahaan extends Model
{
    use HasFactory;
    protected $primaryKey = 'user_id';
    protected $fillable = [
        'nama',
        'user_id',
        'kontak',
        'website',
        'lokasi',
        'deskripsi',
        'bidang'
    ];

    public function Loker()
    {
        # code...
        return $this->hasMany(Loker::class);
    }
}
