<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persyaratan extends Model
{
    use HasFactory;

    protected $fillable = [
        'loker_id',
        'syarat'
    ];

    public function loker()
    {
        return $this->belongsTo(Loker::class,'loker_id');
    }
}
