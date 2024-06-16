<?php

namespace App\Models;

use DateTime;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DoacaoFormaPagamento extends Model
{
    use HasFactory;
    protected $table = 'doacao_forma_pagamento';
    protected $fillable = [
        'tipo',
        'descricao',
        'moeda'
    ];

    protected $casts = [
        'tipo' => 'string',
        'descricao' => 'string',
        'moeda' => 'string'
    ];
}
