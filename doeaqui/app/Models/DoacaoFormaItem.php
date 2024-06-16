<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DoacaoFormaItem extends Model
{
    use HasFactory;
    protected $table = 'doacao_forma_item';
    protected $fillable = [
        'nome',
        'descricao',
        'unidade_medida'
    ];

    protected $casts = [
        'nome' => 'string',
        'descricao' => 'string',
        'unidade_medida' => 'string'
    ];
}
