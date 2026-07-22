<?php

namespace App\View\Components\browse;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\View\Component;

class series extends Component
{
    public LengthAwarePaginator $comics;

    public function __construct(LengthAwarePaginator $comics)
    {
        $this->comics = $comics;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.browse.series');
    }
}
