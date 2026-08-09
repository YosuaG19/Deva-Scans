<?php

namespace App\View\Components\series;

use App\Models\Chapters;
use App\Models\Comics;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\View\Component;

class reaction extends Component
{
    public Collection $reactions;
    public Collection | array $reaction;
    public Comics|Chapters $objects;
    public string $action;

    public function __construct(Collection | array $reaction, string $action, Comics|Chapters $objects, Collection $reactions)
    {   
        $this->reactions = $reactions;
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
