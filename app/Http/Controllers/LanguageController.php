<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LanguageController extends Controller
{
     public function change(Request $request)
    {
        $request->validate([
            'language' => 'required|in:en,id'
        ]);

        session([
            'locale' => $request->language
        ]);

        return response()->json([
            'success' => true
        ]);
    }
}
