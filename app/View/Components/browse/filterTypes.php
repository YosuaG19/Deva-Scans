<?php

namespace App\View\Components\browse;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Collection;
use Illuminate\View\Component;

class filterTypes extends Component
{
    
    public Collection $types;

    public function __construct(Collection $types)
    {
        $this->types = $types;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.browse.filter-types');
    }
}
