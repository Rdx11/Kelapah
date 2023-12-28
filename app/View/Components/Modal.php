<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Modal extends Component
{
    public $type;
    public $title;
    public $action;
    public $button;
    /**
     * Create a new component instance.
     */
    public function __construct($type, $title, $action, $button)
    {
        $this->type = $type;
        $this->title = $title;
        $this->button = $button;
        $this->action = $action;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.modal');
    }
}
