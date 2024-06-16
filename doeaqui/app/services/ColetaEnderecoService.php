<?php

namespace App\Services;

use App\Models\ColetaEndereco;

class ColetaEnderecoService
{
    public function __construct()
    {
        //
    }

    public function create(array $data): int
    {
        ColetaEndereco::create($data);
        return ColetaEndereco::latest()->first()->id;
    }

    public function findAll(): array
    {
        return ColetaEndereco::all()->toArray();
    }
}