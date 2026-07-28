<?php

namespace App\Http\Controllers;

use App\Models\Subscriptions;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SubscriptionController extends Controller
{
    public function view(){
        return view('subscriptions');
    }

    public function addSub(){
        $user = Auth::user();

        $hasSubs = $user->subscriptions? true : false;
        if (!$hasSubs){
            $subscription = Subscriptions::create([
                'user_id' => $user->id
            ]);
        }

        return redirect()->route('home.view');
    }

}
