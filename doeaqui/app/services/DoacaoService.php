<?php

namespace App\Services;

use App\Models\Doacao;
use App\Services\PessoaService;

class DoacaoService
{
    private Doacao $doacao;
    public function __construct(Doacao $doacao)
    {
        $this->doacao = $doacao;
    }

    public function create(array $data): int
    {
        return $this->doacao->create($data)->id;
    }

    public function update(int $id, array $data): int
    {
       return $this->doacao->find($id)->update($data);
    }

    public function findById(int $id): array
    {
        return $this->doacao->find($id)->toArray();
    }

    public function findAll(): array
    {
        return $this->doacao->all()->toArray();
    }
}