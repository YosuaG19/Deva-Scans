<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\Password;

class AuthController extends Controller
{
    public function sign_in(){
        return view('auth.sign-in');
    }

    public function sign_out(Request $request){
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('home.view');
    }

    public function validating_acc(Request $request){
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->route('home.view');
        }

        return back()->withErrors([
            'email' => 'Invalid credentials.',
        ]);
    }

    public function sign_up(){
        return view('auth.sign-up');
    }

    public function create_acc(Request $request){
        $validated = $request->validate([
            'username' => ['required', 'max:30', 'unique:users,name'],
            'email' => ['required', 'email', 'unique:users,email'],
            'password' => ['required', Password::min(8), 'confirmed'],
        ]);

        $user = User::create([
            'name' => $validated['username'],
            'email' => $validated['email'],
            'password' => ($validated['password']),
        ]);

        Auth::login($user);

        return redirect()->route('home.view');
    }

    public function delete_acc(Request $request){
        $user = Auth::user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')
            ->with('success', 'Your account has been deleted.');
    }
}
