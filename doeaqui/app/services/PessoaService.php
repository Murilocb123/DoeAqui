<?php

namespace App\Services;

use App\Models\Pessoa;

class PessoaService
{
    public function __construct()
    {
        //
    }

    public function create(array $data): int
    {
        Pessoa::create($data);
        return Pessoa::latest()->first()->id;
    }

    public function findAll(): array
    {
        return Pessoa::all()->toArray();
    }


}