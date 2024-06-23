<?php

namespace App\Services;

use App\Models\Doacao;
use App\Models\DoacaoEndereco;

class DoacaoEnderecoService
{
    private DoacaoEndereco $doacaoEndereco;
    public function __construct(DoacaoEndereco $doacaoEndereco)
    {
        $this->doacaoEndereco = $doacaoEndereco;
    }

    public function create(array $data): int
    {
        return $this->doacaoEndereco->create($data)->id;
    }

    public function update(int $id, array $data): int
    {
       return $this->doacaoEndereco->find($id)->update($data);
    }

    public function delete(int $id): int
    {
       return $this->doacaoEndereco->find($id)->delete();
    }

    public function findById(int $id): array
    {
        return $this->doacaoEndereco->find($id)->toArray();
    }

    public function findAll(): array
    {
        return $this->doacaoEndereco->all()->toArray();
    }
}