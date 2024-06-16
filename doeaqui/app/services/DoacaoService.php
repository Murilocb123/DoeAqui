<?php

namespace App\Services;

use App\Models\Doacao;

class DoacaoService
{
    public function __construct()
    {
        //
    }

    public function create(array $data): int
    {
        Doacao::create($data);
        return Doacao::latest()->first()->id;
    }

    public function findAll(): array
    {
        return Doacao::all()->toArray();
    }
}