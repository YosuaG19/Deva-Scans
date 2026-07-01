<?php

namespace App\Http\Controllers;

use App\Models\Genres;
use App\Models\Types;
use App\Models\Status;
use App\Models\Sorts;
use Illuminate\Http\Request;

class BrowseController extends Controller
{
    public function view(){
        $genres = Genres::get();
        $types = Types::get();
        $status = Status::get();
        $sorts = Sorts::get();
        
        return view('browse', compact(['genres', 'types', 'status', 'sorts']));
    }
}
