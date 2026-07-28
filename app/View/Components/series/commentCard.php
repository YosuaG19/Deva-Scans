<?php

namespace App\View\Components\series;

use App\Models\Comments;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class commentCard extends Component
{
    public Comments $comment;
    public function __construct(Comments $comment)
    {
        $this->comment = $comment;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.series.comment-card');
    }
}
