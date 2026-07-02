@extends('layout.app')

@section('title', __('auth.log_in'))

@section('content')

<div class="auth-page">

    <div class="signup-container">

        <h1 class="signup-title">
            {{ __('auth.welcome_back') }}
        </h1>

        <img
            src="{{ asset('images/deva-logo.png') }}"
            alt="Deva Scans"
            class="signup-logo"
        >

        <form action="{{ route('home.view') }}">
            <div class="input-group">
                <label>{{ __('auth.email') }}</label>
                <input type="email">
            </div>

           
            <div class="input-group">
                <div class="password-label">
                    <label>{{ __('auth.password') }}</label>
                    <a href="{{ route('forgot-pw.view') }}" class="forgot-password">
                        {{ __('auth.forgot_password') }}
                    </a>
                </div>
                <input type="password">
            </div>

    
            <button type="submit" class="signup-button">
                {{ __('auth.log_in') }}
            </button>
           
            <p class="or-text">
                {{ __('auth.or') }}
            </p>

        
            <p class="login-text">
                {{ __('auth.new_user') }}

                <a href="{{ route('sign-up.view') }}">
                    {{ __('auth.signup_here') }}
                </a>
            </p>

        </form>

    </div>

</div>

@endsection