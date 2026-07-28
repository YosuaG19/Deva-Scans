<?php

namespace App\View\Components\series;

use App\Models\Chapters;
use App\Models\Comics;
use App\Models\Reactions;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Collection;
use Illuminate\View\Component;

class reaction extends Component
{
    public Collection $reaction;
    public Comics|Chapters $objects;
    public string $action;

    public function __construct(Collection $reaction, string $action, Comics|Chapters $objects)
    {   
        $this->reaction = $reaction;
        $this->action = $action;
        $this->objects = $objects;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.series.reaction');
    }
}
