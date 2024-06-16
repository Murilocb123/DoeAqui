<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DoacaoForma extends Model
{
    use HasFactory;
    protected $table = 'doacao_forma';
    protected $fillable = [
        'valor',
        'quantidade',
        'tipo',
        'id_pagamento',
        'id_ponto_coleta',
        'id_item',
        'id_doadao'
    ];

    protected $casts = [
        'valor' => 'decimal(10,2)',
        'quantidade' => 'integer',
        'tipo' => 'string',
        'id_pagamento' => '', 
        'id_ponto_coleta' => '',
        'id_item' =>'', 
        'id_doadao'
    ];
}
