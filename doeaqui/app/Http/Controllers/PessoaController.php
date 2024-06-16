<?php

namespace App\Http\Controllers;

use App\Services\PessoaService;
use Illuminate\Http\Request;

class PessoaController extends Controller
{
    private PessoaService$pessoaService;

    public function __construct(PessoaService $pessoaService)
    {
        $this->pessoaService = $pessoaService;
    }

    public function create(Request $request)
    {
        $data = $request->all();
        $id = $this->pessoaService->create($data);
        return response()->json(['id' => $id]);
    }

    public function findAll()
    {
        $pessoas = $this->pessoaService->findAll();
        return response()->json($pessoas);
    }


    
}
