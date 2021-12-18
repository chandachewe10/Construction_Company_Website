<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class gallery extends Model
{
    use HasFactory;
    protected $fillable = [
        'photo1',
        'photo2',
        'photo3',
        'photo4',
        
            ];
}
