<?php

namespace App\View\Components\series;

use App\Models\Chapters;
use App\Models\Comics;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class chapter extends Component
{
    public Comics $comic;
    public Chapters $fc;
    public Chapters $lc;
    public Chapters $chapter;

    public function __construct(Comics $comic, Chapters $fc, Chapters $lc, Chapters $chapter)
    {
        $this->comic = $comic;
        $this->fc = $fc;
        $this->lc = $lc;
        $this->chapter = $chapter;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.series.chapter');
    }
}
