@extends('layout.app')

@section('title', __('auth.forgot_password_title'))

@section('content')

<div class="auth-page">

    <div class="signup-container">

        <h1 class="signup-title">
            {{ __('auth.forgot_password_title') }}
        </h1>

        <img
            src="{{ asset('images/deva-logo.png') }}"
            alt="Deva Scans"
            class="signup-logo"
        >

        <form action="#">

            <div class="input-group">
                <label>{{ __('auth.email') }}</label>
                <input type="email">
            </div>

            <button type="submit" class="signup-button">
                {{ __('auth.send') }}
            </button>


            <p class="login-text">
                {{ __('auth.remember_password') }}

                <a href="{{ route('sign-in.view') }}">
                    {{ __('auth.login_here') }}
                </a>
            </p>

        </form>

    </div>

</div>

@endsection