<?php

namespace App\Http\Controllers;

use App\Dto\PessoaDto;
use App\Models\Pessoa;
use App\Services\PessoaService;
use Illuminate\Http\Request;

class PessoaController extends Controller
{
    private PessoaService$pessoaService;

    public function __construct(PessoaService $pessoaService)
    {
        $this->pessoaService = $pessoaService;
    }

    /*------------------ Views------------------*/
    public function index()
    {
        return view('pessoa.list');
    }

    public function createView()
    {
        return view('pessoa.create');
    }



    /*------------------ Back-end------------------*/
    public function create(Request $request)
    {
        $id = $this->pessoaService->create($request->all());
        return response()->json(['id' => $id]);
    }

    public function findAll()
    {
        $pessoas = $this->pessoaService->findAll();
        return response()->json($pessoas);
    }

    public function findById(int $id)
    {
        $pessoa = $this->pessoaService->findById($id);
        return response()->json($pessoa);
    }


    
}
