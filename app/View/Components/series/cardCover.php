<?php

namespace App\View\Components\series;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class cardCover extends Component
{
    public string $path;
    public function __construct(string $path)
    {
        $this->path = $path;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.series.cardCover');
    }
}
