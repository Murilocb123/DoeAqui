<?php

namespace App\Http\Controllers;

use App\Services\DoacaoService;
use App\Services\PessoaService;
use App\Services\DoacaoEnderecoService;
use App\Models\Doacao;
use Illuminate\Http\Request;

class DoacaoController extends Controller
{
    private DoacaoService $doacaoService;
    private PessoaService $pessoaService;
    private DoacaoEnderecoService $doacaoEnderecoService;

    public function __construct(DoacaoService $doacaoService, PessoaService $pessoaService, DoacaoEnderecoService $doacaoEnderecoService)
    {
        $this->doacaoService = $doacaoService;
        $this->pessoaService = $pessoaService;
        $this->doacaoEnderecoService = $doacaoEnderecoService;
    }
   /*------------------ Views------------------*/

   public function index()
   {
       $doacaoList = $this->doacaoService->findAll();
       return view('doacao.list')->with('doacoes', json_encode($doacaoList));
   }

   public function createView()
   {
       return view('doacao.doacao')->with('visualizacao', false)
       ->with('doacao', new Doacao())
       ->with('pessoaListSelect', $this->pessoaService->findAllSelect())
       ->with('EnderecoListSelect', $this->doacaoEnderecoService->findAllSelect());
   }

   public function editView(int $id)
   {
       $doacao = $this->doacaoService->findById($id);
       return view('doacao.doacao')->with('visualizacao',false)->with('doacao', $doacao)
       ->with('pessoaListSelect', $this->pessoaService->findAllSelect())
       ->with('EnderecoListSelect', $this->doacaoEnderecoService->findAllSelect());
   }

   public function previewView(int $id)
   {
       $doacao = $this->doacaoService->findById($id);
       return view('doacao.doacao')->with('visualizacao',true)->with('doacao', $doacao)
       ->with('pessoaListSelect', $this->pessoaService->findAllSelect())
       ->with('EnderecoListSelect', $this->doacaoEnderecoService->findAllSelect());
   }


/*------------------ Back-end------------------*/
public function create(Request $request)
{
    $id = $this->doacaoService->create($request->all());
    return redirect()->route('doacao-index');
}

//TODO: tratar se deu 1 se deu certo ou 0 se deu errado

public function update(Request $request, int $id)
{
    $idReturn = $this->doacaoService->update($id, $request->all());
    return redirect()->route('doacao-index');
}

public function delete(int $id)
{
    $this->doacaoService->delete($id);
    return redirect()->route('doacao-index');
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
