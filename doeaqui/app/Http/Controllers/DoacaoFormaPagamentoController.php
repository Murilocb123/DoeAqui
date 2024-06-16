<?php

namespace App\Http\Controllers;

use App\Services\DoacaoFormaPagamentoService;
use Illuminate\Http\Request;

class DoacaoFormaPagamentoController extends Controller
{
    private DoacaoFormaPagamentoService$doacaoFormaPagamentoService;

    public function __construct(DoacaoFormaPagamentoService $doacaoFormaPagamentoService)
    {
        $this->doacaoFormaPagamentoService = $doacaoFormaPagamentoService;
    }

    public function create(Request $request)
    {
        $data = $request->all();
        $id = $this->doacaoFormaPagamentoService->create($data);
        return response()->json(['id' => $id]);
    }

    public function findAll()
    {
        $doacaoFormaPagamentos = $this->doacaoFormaPagamentoService->findAll();
        return response()->json($doacaoFormaPagamentos);
    }
}
