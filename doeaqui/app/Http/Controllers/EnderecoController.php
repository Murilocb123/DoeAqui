<?php

namespace App\Http\Controllers;

use App\Services\DoacaoEnderecoService;
use App\Services\ColetaEnderecoService;
use App\Models\DoacaoEndereco;
use App\Models\ColetaEndereco;
use Illuminate\Http\Request;

class EnderecoController extends Controller
{
    private DoacaoEnderecoService $doacaoEnderecoService;
    //private ColetaEnderecoService $coletaEnderecoService;

    public function __construct(DoacaoEnderecoService $doacaoEnderecoService)
    {
        $this->doacaoEnderecoService = $doacaoEnderecoService;
    }

   /*------------------ Views------------------*/

   public function index()
   {
       $enderecoList = $this->doacaoEnderecoService->findAll();
       return view('endereco.list')->with('enderecos', json_encode($enderecoList));
   }

   public function createView()
   {
       return view('endereco.endereco')->with('visualizacao', false)->with('endereco', new DoacaoEndereco());
   }

   public function editView(int $id)
   {
       $doacaoEndereco = $this->doacaoEnderecoService->findById($id);
       return view('endereco.endereco')->with('visualizacao',true)->with('endereco', $doacaoEndereco);
   }

   public function previewView(int $id)
   {
       $doacaoEndereco = $this->doacaoEnderecoService->findById($id);
       return view('endereco.endereco')->with('visualizacao',true)->with('endereco', $doacaoEndereco);
   }

/*------------------ Back-end------------------*/
public function create(Request $request)
{
    $id = $this->doacaoEnderecoService->create($request->all());
    return redirect()->route('endereco-index');
}

//TODO: tratar se deu 1 se deu certo ou 0 se deu errado

public function update(Request $request, int $id)
{
    $idReturn = $this->doacaoEnderecoService->update($id, $request->all());
    return redirect()->route('endereco-index');
}

public function delete(int $id)
{
    $this->doacaoEnderecoService->delete($id);
    return redirect()->route('endereco-index');
}

public function findAll()
{
    $doacao = $this->doacaoEnderecoService->findAll();
    return response()->json($doacao);
}

public function findById(int $id)
{
    $doacao = $this->doacaoEnderecoService->findById($id);
    return response()->json($doacao);
}   
}
