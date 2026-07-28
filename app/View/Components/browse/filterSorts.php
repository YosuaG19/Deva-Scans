<?php

namespace App\View\Components\browse;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Collection;
use Illuminate\View\Component;

class filterSorts extends Component
{
    public Collection $sorts;

    public function __construct(Collection $sorts)
    {  
        $this->sorts = $sorts;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.browse.filter-sorts');
    }
}
