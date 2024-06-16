<?php

namespace App\Http\Controllers;

use App\Services\DoacaoService;
use Illuminate\Http\Request;

class DoacaoController extends Controller
{
    private DoacaoService$doacaoService;

    public function __construct(DoacaoService $doacaoService)
    {
        $this->doacaoService = $doacaoService;
    }

    public function create(Request $request)
    {
        $data = $request->all();
        $id = $this->doacaoService->create($data);
        return response()->json(['id' => $id]);
    }

    public function findAll()
    {
        $doacoes = $this->doacaoService->findAll();
        return response()->json($doacoes);
    }
}
