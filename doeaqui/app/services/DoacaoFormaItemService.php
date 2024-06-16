<?php

namespace App\Services;

use App\Models\DoacaoFormaItem;

class DoacaoFormaItemService
{
    public function __construct()
    {
        //
    }

    public function create(array $data): int
    {
        DoacaoFormaItem::create($data);
        return DoacaoFormaItem::latest()->first()->id;
    }

    public function findAll(): array
    {
        return DoacaoFormaItem::all()->toArray();
    }
}