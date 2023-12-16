<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Alert extends Component
{
    public $level;
    public $message;
    /**
     * Create a new component instance.
     */
    public function __construct(string $level = "danger", $message = [])
    {
        $this->level   = $level;
        $this->message = $message;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.alert');
    }
}
