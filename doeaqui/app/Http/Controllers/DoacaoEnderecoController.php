<?php

namespace App\Http\Controllers;

use App\Services\DoacaoEnderecoService;
use Illuminate\Http\Request;

class DoacaoEnderecoController extends Controller
{
    private DoacaoEnderecoService$doacaoEnderecoService;

    public function __construct(DoacaoEnderecoService $doacaoEnderecoService)
    {
        $this->doacaoEnderecoService = $doacaoEnderecoService;
    }

    public function create(Request $request)
    {
        $data = $request->all();
        $id = $this->doacaoEnderecoService->create($data);
        return response()->json(['id' => $id]);
    }

    public function findAll()
    {
        $doacaoEnderecos = $this->doacaoEnderecoService->findAll();
        return response()->json($doacaoEnderecos);
    }
}
