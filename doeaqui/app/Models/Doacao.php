<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doacao extends Model
{
    use HasFactory;
    protected $table = 'doacao';
    protected $fillable = [
        'id_beneficiario',
        'id_doacao_destino',
        'titulo',
        'descricao',
        'finalidade',
        'status',
        'caminho_imagem'
    ];

    protected $casts = [
        'id_beneficiario' => 'integer',
        'id_doacao_destino' => 'integer',
        'titulo' => 'string',
        'descricao' => 'string',
        'finalidade' => 'string',
        'status' => 'string',
        'caminho_imagem' => 'string'
    ];
}
