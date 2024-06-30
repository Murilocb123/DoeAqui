<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class textarea extends Component
{
    public $label;

    public $name;
    public $placeholder = "";

    public $columnsxs = 12;
    public $columnsmd = 12;

    public $value = '';
    public $required = false;

    public $visualizacao = false;

    /**
     * Create a new component instance.
     */
    public function __construct($label, $name, $placeholder, $columnsxs = 12, $columnsmd = 1, $value = '', $required = false, $visualizacao = false)
    {
        $this->label = $label;
        $this->name = $name;
        $this->placeholder = $placeholder;
        $this->columnsxs = $columnsxs;
        $this->columnsmd = $columnsmd;
        $this->value = $value;
        $this->required = $required;
        $this->visualizacao = $visualizacao;

    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.textarea');
    }
}
