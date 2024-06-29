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
        $request= request();

        $path = '';
        if($request->hasFile('imagem')){
            $filenameWithExt = $request->file('imagem')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('imagem')->getClientOriginalExtension();
            $fileNameToStore= $filename.'_'.time().'.'.$extension;
            $path = $request->file('imagem')->storeAs('public/imagem', $fileNameToStore);
        }

        $data['caminho_imagem'] = $path;

        return $this->doacao->create($data)->id;
    }

    public function update(int $id, array $data): int
    {
       return $this->doacao->find($id)->update($data);
    }
    
    public function delete(int $id): int
    {
       return $this->doacao->find($id)->delete();
    }

    public function findById(int $id): array
    {
        return $this->doacao->find($id)->toArray();
    }

    public function findAll(): array
    {
        return $this->doacao->all()->toArray();
    }

    public function findAllSelect(): array
    {
        $doacao = $this->doacao->all()->toArray();
        $doacaoListSelect = [];
        // ['value' => 'Ativo', 'label' => 'Ativo', 'selected' => true],
        $index = 0;
        foreach ($doacao as $p) {
            $doacaoListSelect[$index] = ['value' => $p['id'], 'label' => $p['nome'], 'selected' => false];
            $index++;
        }
        $doacaoListSelect[$index] = ['value' => '', 'label' => 'Selecione', 'selected' => true];
        return $doacaoListSelect;
    }
}