<?php

namespace App\View\Components\creator;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\View\Component;

class series extends Component
{
    public LengthAwarePaginator $created;
    public function __construct(LengthAwarePaginator $created)
    {
        $this->created = $created;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.creator.series');
    }
}
