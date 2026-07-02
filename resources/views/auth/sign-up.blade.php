@extends('layout.app')

@section('title', __('auth.sign_up'))

@section('content')

<div class="auth-page">

    <div class="signup-container">

        <h1 class="signup-title">{{ __('auth.welcome') }}</h1>

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

                <label>{{ __('auth.password') }}</label>

                <input type="password">

            </div>

            <div class="input-group">

                <label>{{ __('auth.confirm_password') }}</label>

                <input type="password">

            </div>

            <button type="submit" class="signup-button">{{ __('auth.sign_up') }}</button>

            <p class="or-text">{{ __('auth.or') }}</p>

            <p class="login-text">
                {{ __('auth.already_have_account') }}

                <a href="{{ route('sign-in.view') }}">
                {{ __('auth.login_here') }}
                </a>
            </p>

        </form>

    </div>

</div>

@endsection