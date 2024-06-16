<?php

namespace App\Http\Controllers;

use App\Services\ColetaEnderecoService;
use Illuminate\Http\Request;

class ColetaEnderecoController extends Controller
{
    private ColetaEnderecoService$coletaEnderecoService;

    public function __construct(ColetaEnderecoService $coletaEnderecoService)
    {
        $this->coletaEnderecoService = $coletaEnderecoService;
    }

    public function create(Request $request)
    {
        $data = $request->all();
        $id = $this->coletaEnderecoService->create($data);
        return response()->json(['id' => $id]);
    }

    public function findAll()
    {
        $coletaEnderecos = $this->coletaEnderecoService->findAll();
        return response()->json($coletaEnderecos);
    }
}
