<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelamar extends Model
{
    use HasFactory;

    protected $primaryKey='user_id';

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
    
    public function jenis_difabel()
    {
        return $this->belongsTo(JenisDifabel::class,'jenis_disabilitas');
    }

    //relasi many to many dengan loker
    public function loker()
    {
        return $this->belongsToMany(Loker::class, 'loker_pelamar','pelamar_id');
    }

    public function getLoker($id)
    {
        return $this->belongsToMany(Loker::class,'loker_pelamar','pelamar_id')
                ->withPivot('created_at','status')
                ->wherePivot('loker_id', $id);
    }
}
