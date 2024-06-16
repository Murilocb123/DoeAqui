<?php

namespace App\Http\Controllers;

use App\Services\DoacaoFormaService;
use Illuminate\Http\Request;

class DoacaoFormaController extends Controller
{
    private DoacaoFormaService$doacaoFormaService;

    public function __construct(DoacaoFormaService $doacaoFormaService)
    {
        $this->doacaoFormaService = $doacaoFormaService;
    }

    public function create(Request $request)
    {
        $data = $request->all();
        $id = $this->doacaoFormaService->create($data);
        return response()->json(['id' => $id]);
    }

    public function findAll()
    {
        $doacaoFormas = $this->doacaoFormaService->findAll();
        return response()->json($doacaoFormas);
    }
}
