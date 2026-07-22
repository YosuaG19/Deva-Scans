<?php

namespace App\View\Components\browse;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Collection;
use Illuminate\View\Component;

class filterStatus extends Component
{
    public Collection $status;    

    public function __construct(Collection $status)
    {
        $this->status = $status;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.browse.filter-status');
    }
}
