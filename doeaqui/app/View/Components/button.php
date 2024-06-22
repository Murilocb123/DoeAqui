<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class button extends Component
{
   
    public $type;
    public $label;
    public $styleclass;
    
    public $href = null;

    public $visualizacao;

    /**
     * Create a new component instance.
     */
    public function __construct($type, $label, $styleclass, $href = null, $visualizacao = false)
    {
        $this->type = $type;
        $this->label = $label;
        $this->styleclass = $styleclass;
        $this->href = $href;
        $this->visualizacao = $visualizacao;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.button');
    }
}
