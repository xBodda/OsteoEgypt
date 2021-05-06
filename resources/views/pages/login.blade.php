@extends('layouts.app')

@section('title')
    Login
@endsection

@section('contents')
    <div class="box-container">
        <div class="image">
            <div class="logo"></div>
        </div>
        <div class="form-container">
            <div class="heading">
                <h1 class="text-4xl">Log In</h1>
            </div>
            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam.</p>
            <div class="login-with-container">
                <div class="login-with-button">
                    <img src="{{ asset('assets/svg/google.svg') }}" alt="google logo white" width="20px"> Login with Google
                </div>
                <div class="login-with-button blue">
                    <img src="{{ asset('assets/svg/facebook-square.svg') }}" alt="facebook logo white" width="20px"> Login with Facebook
                </div>
            </div>
            <div class="sep-or"></div>
            <form action="{{ route('login') }}" method="POST">
                @if(session('status'))
                    <div class="alert alert-fail">
                        {{ session('status') }}
                    </div>
                @endif
                @csrf

                <x-input type="email"  name="email" message="Email Address" placeholder="Your Email Address" value="{{ old('email') }}" />
                <x-input type="password" name="password"  message="Password" placeholder="Password" />

                <div class="submit-button-container">
                    <input type="submit" class="submit-button" value="Sign In">
                </div>
                <div class="center-text">
                    Don't have account? <a class="link-decoration" href="{{ route('signup') }}">Sign up</a>
                </div>
            </form>
        </div>
    </div>

    {{--
    <form action="{{ route('login') }}" method="POST">
        @csrf
        <input type="email" name="email" value="{{ old('email') }}">
        <input type="password" name="password">
        <input type="submit">
    </form> --}}

@endsection
