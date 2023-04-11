<?php

namespace App\View\Components\Form;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class button extends Component
{
    public $type;
    public $class;
    public $btnText;
    /**
     * Create a new component instance.
     */
    public function __construct($type=null, $class=null, $btnText=null)
    {
        $this->type     = $type;
        $this->class    = $class;
        $this->btnText  = $btnText;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.form.button');
    }
}
