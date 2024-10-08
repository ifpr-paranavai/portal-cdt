<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Membro extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'cargo',
        'biografia',
        'imagem',
        'alt',
        'linkedin',
        'github'
    ];
    
}