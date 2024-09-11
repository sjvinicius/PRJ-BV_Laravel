<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = "produto";

    protected $fillable = [
        'NOME',
        'VALORMEDIDA',
        'INFOADD',
        'IMAGEM',
        'DIA_SEMANA',
        'STATUS',
        'CRIACAO_TOKEN',
    ];

    protected $casts = [
        'DIA_SEMANA' => 'integer',
        'VALORMEDIDA' => 'float',
        'INFOADD' => 'string',
    ];
}
