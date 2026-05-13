@extends('layout.app')

@section('title', 'Forgot Password')

@section('content')

<div class="auth-page">

    <div class="signup-container">

        <h1 class="signup-title">
            FORGOT PASSWORD?
        </h1>

        <img
            src="{{ asset('images/deva-logo.png') }}"
            alt="Deva Scans"
            class="signup-logo"
        >

        <form action="#">

            <div class="input-group">
                <label>Email Address</label>
                <input type="email">
            </div>

            <button type="submit" class="signup-button">
                Send
            </button>


            <p class="login-text">
                Remember your password?
                <a href="{{ route('sign-in.view') }}">
                    Log In here
                </a>
            </p>

        </form>

    </div>

</div>

@endsection