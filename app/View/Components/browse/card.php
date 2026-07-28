<?php

namespace App\View\Components\browse;

use App\Models\Comics;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class card extends Component
{
    public Comics $comic;

    public function __construct(Comics $comic)
    {
        $this->comic = $comic;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.browse.card');
    }
}
