<?php

namespace App\View\Components\series;

use App\Models\Reactions;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Collection;
use Illuminate\View\Component;

class reaction extends Component
{
    public Collection $reaction;

    public function __construct(Collection $reaction)
    {   
        $this->reaction = $reaction;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.series.reaction');
    }
}
