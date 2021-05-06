@extends('layouts.app')

@section('title')
<<<<<<< HEAD
    Signup
=======
    Sign Up
>>>>>>> 1847ab893813f7e28bff7014d5f7733f930950c3
@endsection

@section('contents')
    <div class="box-container">
        <div class="image">
            <div class="logo"></div>
        </div>
        <div class="form-container">
            <div class="heading">
<<<<<<< HEAD
                <h1>Log In</h1>
=======
                <h1 class="text-4xl">Sign Up</h1>
>>>>>>> 1847ab893813f7e28bff7014d5f7733f930950c3
            </div>
            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam.</p>
            <div class="login-with-container">
                <div class="login-with-button">
<<<<<<< HEAD
                    <img src="{{ asset('assets/svg/google.svg') }}" alt="google logo white" width="20px"> Login with Google
                </div>
                <div class="login-with-button blue">
                    <img src="{{ asset('assets/svg/facebook-square.svg') }}" alt="facebook logo white" width="20px"> Login with Facebook
=======
                    <img src="{{ asset('assets/svg/google.svg') }}" alt="google logo white" width="20px"> Sign Up with Google
                </div>
                <div class="login-with-button blue">
                    <img src="{{ asset('assets/svg/facebook-square.svg') }}" alt="facebook logo white" width="20px"> Sign Up with Facebook
>>>>>>> 1847ab893813f7e28bff7014d5f7733f930950c3
                </div>
            </div>
            <div class="sep-or"></div>
            <form action="{{ route('signup') }}" method="POST">
                @if(session('status'))
                    <div class="alert alert-fail">
                        {{ session('status') }}
                    </div>
                @endif
                @csrf
<<<<<<< HEAD
                <label for="email">Email Address</label>
                <input type="email" id="email" name="email" value="{{ old('email') }}" placeholder="Your Email Address">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Password">
=======

                <x-input type="text"  name="name" message="Full Name" placeholder="Your full name" value="{{ old('name') }}"/>
                <x-input type="email"  name="email" message="Email Address" placeholder="Your Email Address" value="{{ old('email') }}"/>
                <x-input type="password" name="password"  message="Password" placeholder="Password" />
                <x-input type="password" name="password_confirmation"  message="Confirm Password" placeholder="Confirm Password" />

>>>>>>> 1847ab893813f7e28bff7014d5f7733f930950c3
                <div class="submit-button-container">
                    <input type="submit" class="submit-button" value="Sign In">
                </div>
                <div class="center-text">
<<<<<<< HEAD
                    Don't have account? <a class="link-decoration" href="{{ route('signup') }}">Sign up</a>
=======
                    Already have an account? <a class="link-decoration" href="{{ route('login') }}">Login</a>
>>>>>>> 1847ab893813f7e28bff7014d5f7733f930950c3
                </div>
            </form>
        </div>
    </div>

<<<<<<< HEAD
=======
    {{--
    <form action="{{ route('login') }}" method="POST">
        @csrf
        <input type="email" name="email" value="{{ old('email') }}">
        <input type="password" name="password">
        <input type="submit">
    </form> --}}

>>>>>>> 1847ab893813f7e28bff7014d5f7733f930950c3
@endsection
