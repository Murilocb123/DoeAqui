<?php

namespace App\Http\Controllers;

use App\Services\DoacaoService;
use App\Models\Doacao;
use Illuminate\Http\Request;

class DoacaoController extends Controller
{
    private DoacaoService$doacaoService;

    public function __construct(DoacaoService $doacaoService)
    {
        $this->doacaoService = $doacaoService;
    }

   /*------------------ Views------------------*/

   public function index()
   {
       return view('doacao.list');
   }

   public function createView()
   {
       return view('doacao.doacao')->with('isEdicao', false)->with('doacao', new Doacao());
   }

   public function editView(int $id)
   {
       $doacao = $this->doacaoService->findById($id);
       return view('doacao.doacao')->with('isEdicao',true)->with('doacao', $doacao);
   }


/*------------------ Back-end------------------*/
public function create(Request $request)
{
    $id = $this->doacaoService->create($request->all());
    return response()->json(['id' => $id]);
}

//TODO: tratar se deu 1 se deu certo ou 0 se deu errado

public function update(Request $request, int $id)
{
    $idReturn = $this->doacaoService->update($id, $request->all());
    return response()->json(['id' => $idReturn]);
}

public function findAll()
{
    $doacao = $this->doacaoService->findAll();
    return response()->json($doacao);
}

public function findById(int $id)
{
    $doacao = $this->doacaoService->findById($id);
    return response()->json($doacao);
}   
}
