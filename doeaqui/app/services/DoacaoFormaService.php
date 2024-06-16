<?php

namespace App\Services;

use App\Models\DoacaoForma;

class DoacaoFormaService
{
    public function __construct()
    {
        //
    }

    public function create(array $data): int
    {
        DoacaoForma::create($data);
        return DoacaoForma::latest()->first()->id;
    }

    public function findAll(): array
    {
        return DoacaoForma::all()->toArray();
    }
}