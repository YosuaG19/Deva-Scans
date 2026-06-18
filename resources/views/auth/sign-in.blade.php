@extends('layout.app')

@section('title', 'Sign In')

@section('content')

<div class="auth-page">

    <div class="signup-container">

        <h1 class="signup-title">
            WELCOME BACK TO
        </h1>

        <img
            src="{{ asset('images/deva-logo.png') }}"
            alt="Deva Scans"
            class="signup-logo"
        >

        <form action="{{ route('home.view') }}">
            <div class="input-group">
                <label>Email Address</label>
                <input type="email">
            </div>

           
            <div class="input-group">
                <div class="password-label">
                    <label>Password</label>
                    <a href="{{ route('forgot-pw.view') }}" class="forgot-password">
                        Forgot password?
                    </a>
                </div>
                <input type="password">
            </div>

    
            <button type="submit" class="signup-button">
                Log In
            </button>
           
            <p class="or-text">
                or
            </p>

        
            <p class="login-text">
                Are you new?
                <a href="{{ route('sign-up.view') }}">
                    Sign up here!
                </a>
            </p>

        </form>

    </div>

</div>

@endsection