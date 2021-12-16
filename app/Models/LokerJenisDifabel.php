<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LokerJenisDifabel extends Model
{
    use HasFactory;
    protected $fillable = [
        'loker_id',
        'jenis_difabel_id'
    ];

    
}
