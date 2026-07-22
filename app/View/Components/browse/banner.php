<?php

namespace App\View\Components\browse;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Collection;
use Illuminate\View\Component;

class banner extends Component
{
    public Collection $sorts;
    public Collection $types;
    public Collection $status;
    public Collection $genres;
    public Collection $comics;

    public function __construct(Collection $sorts, Collection $types, Collection $status, Collection $genres, Collection $comics)
    {
        $this->sorts = $sorts;
        $this->types = $types;
        $this->status = $status;
        $this->genres = $genres;
        $this->comics = $comics;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.browse.banner');
    }
}
