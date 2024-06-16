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

    /**
     * Create a new pessoa
     * 
     * @route POST /pessoa
     * @param array $data
     * @return int $id - Pessoa criado id
     */
    public function create(array $data): int
    {
        return $this->pessoa->create($data)->id;
    }

    /**
     * Find a pessoa by id
     * 
     * @route GET /pessoa/{id}
     * @param int $id
     * @return array $pessoa
     */
    public function findById(int $id): array
    {
        return $this->pessoa->find($id)->toArray();
    }

    /**
     * Find all pessoas
     * TODO: Add pagination
     * 
     * @route GET /pessoa
     * @return array $pessoas
     */
    public function findAll(): array
    {
        return $this->pessoa->all()->toArray();
    }


}