<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doacao extends Model
{
    use HasFactory;
    protected $table = 'pessoa';
    protected $fillable = [
        'titulo',
        'descricao',
        'finalidade',
        'status',
        'caminho_imagem',
        'id_beneficiario',
        'id_doacao_destino'
    ];

    protected $casts = [
        'titulo' => 'string',
        'descricao' => 'string',
        'finalidade' => 'string',
        'status' => 'string',
        'caminho_imagem' => 'string',
        'id_beneficiario' => 'integer',
        'id_doacao_destino' => 'integer'
    ];
}
