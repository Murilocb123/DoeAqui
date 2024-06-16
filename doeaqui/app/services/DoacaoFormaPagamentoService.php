<?php

namespace App\Services;

use App\Models\DoacaoFormaPagamento;

class DoacaoFormaPagamentoService
{
    public function __construct()
    {
        //
    }

    public function create(array $data): int
    {
        DoacaoFormaPagamento::create($data);
        return DoacaoFormaPagamento::latest()->first()->id;
    }

    public function findAll(): array
    {
        return DoacaoFormaPagamento::all()->toArray();
    }
}