<?php

namespace App\Http\Controllers;

use App\Dto\PessoaDto;
use App\Models\Pessoa;
use App\Services\PessoaService;
use Illuminate\Http\Request;

class PessoaController extends Controller
{
    private PessoaService $pessoaService;

    public function __construct(PessoaService $pessoaService)
    {
        $this->pessoaService = $pessoaService;
    }

    /*------------------ Views------------------*/
    
    public function index()
    {
        $pessoaList = $this->pessoaService->findAll();
        return view('pessoa.list')->with('pessoas', json_encode($pessoaList));
    }

    public function createView()
    {
        return view('pessoa.pessoa')->with('visualizacao', false)->with('pessoa', new Pessoa());
    }

    public function editView(int $id)
    {
        $pessoa = $this->pessoaService->findById($id);
        return view('pessoa.pessoa')->with('visualizacao',false)->with('pessoa', $pessoa);
    }

    public function previewView(int $id)
    {
        $pessoa = $this->pessoaService->findById($id);
        return view('pessoa.pessoa')->with('visualizacao',true)->with('pessoa', $pessoa);
    }

    /*------------------ Back-end------------------*/
    public function create(Request $request)
    {
        $id = $this->pessoaService->create($request->all());
        return redirect()->route('pessoa-index');
    }

    //TODO: tratar se deu 1 se deu certo ou 0 se deu errado

    public function update(Request $request, int $id)
    {
        $idReturn = $this->pessoaService->update($id, $request->all());
        return redirect()->route('pessoa-index');
    }

    public function delete(int $id)
    {
        $this->pessoaService->delete($id);
        return redirect()->route('pessoa-index');
    }

    public function findAll()
    {
        $pessoas = $this->pessoaService->findAll();
        return response()->json($pessoas);
    }

    public function findById(int $id)
    {
        $pessoa = $this->pessoaService->findById($id);
        return response()->json($pessoa);
    }


    
}
