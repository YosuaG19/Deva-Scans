<?php

namespace App\View\Components\series;

use App\Models\Chapters;
use App\Models\Comics;
use App\Models\ReadingHistory;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class detailContent extends Component
{
    public Comics $comic;
    public Chapters $fc;
    public Chapters $lc;
    public ?    ReadingHistory $history;

    public function __construct(Comics $comic, Chapters $fc, Chapters $lc, ?ReadingHistory $history)
    {
        $this->comic = $comic;
        $this->fc = $fc;
        $this->lc = $lc;
        $this->history = $history;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.series.detailContent');
    }
}
