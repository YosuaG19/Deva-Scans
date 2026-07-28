<?php

namespace App\View\Components\profile;

use App\Models\ReadingHistory;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class cardVert extends Component
{
    public ReadingHistory $history;    

    public function __construct(ReadingHistory $history)
    {
        $this->history = $history;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.profile.cardVert');
    }
}
