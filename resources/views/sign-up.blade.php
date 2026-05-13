@extends('layout.app')

@section('title', 'Sign Up')

@section('content')

<div class="auth-page">

    <div class="signup-container">

        <h1 class="signup-title">
            WELCOME TO
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

                <label>Password</label>

                <input type="password">

            </div>

            <div class="input-group">

                <label>Confirm Password</label>

                <input type="password">

            </div>

            <button type="submit" class="signup-button">
                Sign Up
            </button>

            <p class="or-text">
                or
            </p>

            <p class="login-text">

                Already have an account?

                <a href="{{ route('sign-in.view') }}">
                    Log In here
                </a>

            </p>

        </form>

    </div>

</div>

@endsection