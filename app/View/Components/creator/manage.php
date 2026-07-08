<?php

namespace App\View\Components\creator;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class manage extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.creator.manage');
    }
}
