<?php

namespace App\View\Components\browse;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Collection;
use Illuminate\View\Component;

class filterLayout extends Component
{
    public Collection $sorts;
    public Collection $types;
    public Collection $status;
    public Collection $genres;

    public function __construct(Collection $sorts, Collection $types, Collection $status, Collection $genres)
    {
        $this->sorts = $sorts;
        $this->types = $types;
        $this->status = $status;
        $this->genres = $genres;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.browse.filter-layout');
    }
}
