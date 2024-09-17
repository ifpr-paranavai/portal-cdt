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
        'cpf',
        'ativo',
        'biografia',
        'imagem',
        'alt',
        'linkedin',
        'github'
    ];

    public function certificados()
    {
        return $this->hasMany(Certificado::class, 'membros_id');
    }
}