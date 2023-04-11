<?php

namespace App\View\Components\Form;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class inputText extends Component
{
    public $icon;
    public $type;
    public $name;
    public $class;
    public $value;
    public $placeholder;
    
    /**
     * Create a new component instance.
     */
    public function __construct( $icon=null, $type=null, $name=null, $class=null, $value=null, $placeholder=null )
    {
        $this->icon         = $icon;
        $this->type         = $type;
        $this->name         = $name;
        $this->class        = $class;
        $this->value        = $value;
        $this->placeholder  = $placeholder;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.form.input-text');
    }
}
