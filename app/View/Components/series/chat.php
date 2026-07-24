<?php

namespace App\View\Components\series;

use App\Models\Chapters;
use App\Models\Comics;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;


class chat extends Component
{
    public Comics|Chapters $object;
    public string $action;
    public function __construct(Comics|Chapters $object, string $action)
    {
        $this->object = $object;
        $this->action = $action;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.series.chat');
    }
}
