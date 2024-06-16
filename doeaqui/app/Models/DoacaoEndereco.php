<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DoacaoEndereco extends Model
{
    use HasFactory;
    protected $table = 'doacao_endereco';
    protected $fillable = [
        'cep',
        'rua',
        'numero',
        'complemento',
        'bairro',
        'cidade',
        'uf',
        'pais'
    ];

    protected $casts = [
        'cep' =>'string',
        'rua' => 'string',
        'numero' => 'string',
        'complemento' => 'string',
        'bairro' => 'string',
        'cidade' => 'string',
        'uf' => 'string',
        'pais' => 'string'
    ];
}
