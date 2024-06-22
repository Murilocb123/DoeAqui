<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class table extends Component
{
    public $columns;
    public $dados;
    public $rotaCriacao;
    public $rotaVizualizacao;
    public $rotaEdicao;
    public $rotaExclusao;

    public $titulo;

    /**
     * Create a new component instance.
     */
    public function __construct($columns, $dados, $rotaCriacao, $rotaVizualizacao, $rotaEdicao, $rotaExclusao, $titulo)
    {
        $this->columns = $columns;
        $this->dados =  json_decode(html_entity_decode($dados));
        $this->rotaCriacao = $rotaCriacao;
        $this->rotaVizualizacao = $rotaVizualizacao;
        $this->rotaEdicao = $rotaEdicao;
        $this->rotaExclusao = $rotaExclusao;
        $this->titulo = $titulo; 
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.table');
    }
}
