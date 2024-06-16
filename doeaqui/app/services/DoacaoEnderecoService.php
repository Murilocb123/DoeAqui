<?php

namespace App\Services;

use App\Models\DoacaoEndereco;

class DoacaoEnderecoService
{
    public function __construct()
    {
        //
    }

    public function create(array $data): int
    {
        DoacaoEndereco::create($data);
        return DoacaoEndereco::latest()->first()->id;
    }

    public function findAll(): array
    {
        return DoacaoEndereco::all()->toArray();
    }
}