<?php

namespace App\Services;

use App\Models\Pessoa;

class PessoaService
{
    private Pessoa $pessoa;
    public function __construct(Pessoa $pessoa)
    {
        $this->pessoa = $pessoa;
    }

    public function create(array $data): int
    {
        return $this->pessoa->create($data)->id;
    }

    public function update(int $id, array $data): int
    {
       return $this->pessoa->find($id)->update($data);
    }

    public function delete(int $id): int
    {
       return $this->pessoa->find($id)->delete();
    }

    public function findById(int $id): array
    {
        return $this->pessoa->find($id)->toArray();
    }

    public function findAll(): array
    {
        return $this->pessoa->all()->toArray();
    }

    public function findAllSelect(): array
    {
        $pessoa = $this->pessoa->all()->toArray();
        $pessoaListSelect = [];
        // ['value' => 'Ativo', 'label' => 'Ativo', 'selected' => true],
        $index = 0;
        foreach ($pessoa as $p) {
            $pessoaListSelect[$index] = ['value' => $p['id'], 'label' => $p['nome'], 'selected' => false];
            $index++;
        }
        $pessoaListSelect[$index] = ['value' => '', 'label' => 'Selecione', 'selected' => true];
        return $pessoaListSelect;
    }
}