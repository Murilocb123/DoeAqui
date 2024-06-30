<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class img extends Component
{

    public $image;
    public $name;
    public $visualizacao = false;

    /**
     * Create a new component instance.
     */
    public function __construct($image, $name, $visualizacao = false)
    {
        $this->image = $image;
        $this->name = $name;
        $this->visualizacao = $visualizacao;        
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.img');
    }
}
