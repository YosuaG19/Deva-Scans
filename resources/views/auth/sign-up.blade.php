@extends('layout.master')

@section('title', __('auth.sign_up'))

@section('content')

<div class="auth-page min-h-[100vh] flex items-center justify-center">

    <div class="signup-container rounded-lg flex items-center flex-col gap-2 w-[85%] md:w-[55%] lg:w-[35%] bg-[#05050570] px-12 py-8">

        <span class="flex flex-col w-full items-center">
            <h1 class="text-white text-lg font-bold">
                {{ __('auth.welcome') }}
            </h1>
    
            <img src="{{ asset('images/deva-logo.png') }}" alt="Deva Scans" class="signup-logo w-[300px]">
        </span>

        
        <form method="POST" action="{{ route('auth.acc_sign_up') }}" class="flex flex-col items-center gap-2 w-[90%] lg:w-[75%]">
            @csrf
            <div class="flex flex-col gap-1 w-full text-xs font-semibold text-white">
                <label>Username</label>
                <input class="text-black text-xs font-thin px-2 py-1.5 rounded bg-white w-full" type="text" name="username">
            </div>

            <div class="flex flex-col gap-1 w-full text-xs font-semibold text-white">
                <label>{{ __('auth.email') }}</label>
                <input class="text-black text-xs font-thin px-2 py-1.5 rounded bg-white w-full" type="email" name="email">
            </div>

            <div class="flex flex-col gap-1 w-full text-xs font-semibold text-white">
                <label>{{ __('auth.password') }}</label>
                <input class="text-black text-xs font-thin px-2 py-1.5 rounded bg-white w-full" type="password" name="password">
            </div>
            
            <div class="flex flex-col gap-1 w-full text-xs font-semibold text-white">
                <label>{{ __('auth.confirm_password') }}</label>
                <input class="text-black text-xs font-thin px-2 py-1.5 rounded bg-white w-full" type="password" name="password_confirmation">
            </div>

            <button type="submit" class="cursor pointer mt-4 w-fit px-8 py-2 text-xs font-semibold text-black bg-[#FFD700] rounded">
                {{ __('auth.sign_up') }}
            </button>

        </form>
        <p class="text-white text-xs">
            {{ __('auth.already_have_account') }}

            <a class="font-semibold text-[#FFD700] hover:text-underline" href="{{ route('auth.sign_in') }}">
                {{ __('auth.login_here') }}
            </a>
        </p>
    </div>
</div>

@endsection