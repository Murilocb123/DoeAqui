<?php

namespace App\Http\Controllers;

use App\Services\DoacaoService;
use App\Services\PessoaService;
use App\Services\DoacaoEnderecoService;
use App\Models\Doacao;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    private DoacaoService $doacaoService;
    private PessoaService $pessoaService;
    private DoacaoEnderecoService $doacaoEnderecoService;

    public function __construct(
        DoacaoService $doacaoService,
        PessoaService $pessoaService,
        DoacaoEnderecoService $doacaoEnderecoService
    ) {
        $this->doacaoService = $doacaoService;
        $this->pessoaService = $pessoaService;
        $this->doacaoEnderecoService = $doacaoEnderecoService;
    }

    public function index()
    {
        return view('home')->with('visualizacao',false)->with('doacao', new Doacao())
        ->with('doacaoListSelect', $this->doacaoService->findAllSelect('caminho_imagem'))
        ->with('pessoaListSelect', $this->pessoaService->findAllSelect())
        ->with('EnderecoListSelect', $this->doacaoEnderecoService->findAllSelect());
    }
}
