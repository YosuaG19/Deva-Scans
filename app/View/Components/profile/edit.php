<?php

namespace App\View\Components\profile;

use App\Models\User;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Collection;
use Illuminate\View\Component;

class edit extends Component
{
    public User $user;
    public array $pp_list = [
            'profile-pic-1',
            'profile-pic-2',
            'profile-pic-3'
        ];
    public function __construct(User $user)
    {
        $this->user = $user;    
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.profile.edit');
    }
}
