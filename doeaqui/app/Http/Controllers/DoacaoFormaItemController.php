<?php

namespace App\Http\Controllers;

use App\Services\DoacaoFormaItemService;
use Illuminate\Http\Request;

class DoacaoFormaItemController extends Controller
{
    private DoacaoFormaItemService$doacaoFormaItemService;

    public function __construct(DoacaoFormaItemService $doacaoFormaItemService)
    {
        $this->doacaoFormaItemService = $doacaoFormaItemService;
    }

    public function create(Request $request)
    {
        $data = $request->all();
        $id = $this->doacaoFormaItemService->create($data);
        return response()->json(['id' => $id]);
    }

    public function findAll()
    {
        $doacaoFormaItens = $this->doacaoFormaItemService->findAll();
        return response()->json($doacaoFormaItens);
    }
}
