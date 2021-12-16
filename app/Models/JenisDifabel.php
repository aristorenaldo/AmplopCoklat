<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JenisDifabel extends Model
{
    use HasFactory;
    protected $fillable = [
        'jenis'
    ];
    // relasi many to many dengan loker
    public function loker()
    {
        return $this->belongsToMany(Loker::class, 'loker_jenis_difabels');
    }

    
}
