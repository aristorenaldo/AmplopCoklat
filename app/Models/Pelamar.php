<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelamar extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'user_id',
        'alamat',
        'jenis_kelamin',
        'jenis_disabilitas',
        'resume'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
