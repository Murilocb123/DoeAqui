<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class select extends Component
{

    public $label;
    public $name;
    public $options;
    public $value;

    /**
     * Create a new component instance.
     */
    public function __construct($label, $name, $options, $value)
    {
        $this->label = $label;
        $this->name = $name;
        $this->options = $options;
        $this->value = $value;
        if($this->value != null){
        foreach ($this->options as $key => $option) {
            if ($option['value'] == $this->value) {
                $this->options[$key]['selected'] = true;
            } else {
                $this->options[$key]['selected'] = false;
            }
        }
    }
}

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.select');
    }
}
