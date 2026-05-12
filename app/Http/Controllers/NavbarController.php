<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NavbarController extends Controller
{
    public function navbarOption(){
        $option = [
            "Home", "Browse", "Profile", "Creator"
        ];

        return compact('option');
    }
}
