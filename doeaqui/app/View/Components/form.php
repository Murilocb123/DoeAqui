<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class form extends Component
{

    public $method;
    public $actionCreate = '';
    public $actionEdit = '';

    public $action;
    public $titulo = '';

    public $id;

    public $redirect;

    /**
     * Create a new component instance.
     */
    public function __construct($actionCreate,$actionEdit, $titulo = '', $id = null, $redirect = null)
    {
        $this->actionCreate = $actionCreate;
        $this->titulo = $titulo;
        $this->id = $id;
        $this->redirect = $redirect;
        $this->actionEdit = $actionEdit;

        if($this->id == null){
            $this->action = $this->actionCreate;
            if($this->method==null){
                $this->method = 'POST';
            }
        }else{
            $this->action = $this->actionEdit;
            if($this->method==null){
                $this->method = 'PUT';
            }
        }
        
    }
    

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.form');
    }
}
