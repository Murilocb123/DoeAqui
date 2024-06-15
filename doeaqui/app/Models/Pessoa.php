<?php

namespace App\Models;

use DateTime;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pessoa extends Model
{
    use HasFactory;
    protected $table = 'pessoa';
    protected $fillable = [
        'nome',
        'email',
        'telefone',
        'cpf_cnpj',
        'tipo'
    ];

    protected $casts = [
        'nome' => 'string',
        'email' => 'string',
        'telefone' => 'string',
        'cpf_cnpj' => 'string',
        'tipo' => 'string'
    ];
}
