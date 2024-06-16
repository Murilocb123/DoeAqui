<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ColetaEndereco extends Model
{
    use HasFactory;

    protected $table = 'coleta_endereco';
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
