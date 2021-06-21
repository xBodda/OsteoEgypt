@extends('layouts.app')

@section('title')
    Complete Sign Up
@endsection

@section('contents')
    <div class="box-container">
        <div class="image">
            <div class="logo"></div>
        </div>
        <div class="form-container">
            <div class="heading">
                <h1 class="text-4xl">Complete Sign Up</h1>
            </div>
            <p>Please fill in all the required details.</p>
            <form action="{{ route('signup_finish') }}" method="POST">
                @if(session('status'))
                    <div class="alert alert-fail">
                        {{ session('status') }}
                    </div>
                @endif
                @csrf
                <x-input type="text"  name="name" message="Full Name" placeholder="Your full name" value="{{ $name ?? old('name') }} "/>
                <x-input type="email"  name="email" message="Email Address" placeholder="Your Email Address" value="{{ $email ?? old('email') }}"/>
               
                <div class="grid grid-cols-2 grid-rows-1 gap-2 w-full">
                    <x-select type="text" name="gender"  message="Gender" placeholder="Choose Your Gender" value="{{ old('phone') }}" >
                        <option value="1">Male</option>
                        <option value="0">Female</option>
                    </x-select>
                    <x-input type="date" name="birth_date"  message="Date Of Birth" placeholder="Enter your birth date" value="{{ old('birth_date') }}" />
                </div>
                
                <x-input type="text" name="phone"  message="Phone Number" placeholder="Your Phone Number" value="{{ old('phone') }}" />
                
                <div class="grid grid-cols-2 grid-rows-1 gap-2 w-full">
                    <x-input type="password" name="password"  message="Password" placeholder="Password" value="" />
                    <x-input type="password" name="password_confirmation"  message="Confirm Password" placeholder="Confirm Password" value="" />
                </div>
                <p id="passwordHint"></p>
                <div class="submit-button-container">
                    <input type="submit" class="submit-button" value="Sign Up">
                </div>
                
            </form>
        </div>
    </div>
    <script>
            var input = document.getElementById('password');
            var timeoutx;
            input.addEventListener("input",function() {
                document.getElementById('passwordHint').innerHTML = "Make sure it's at least 8 characters including a number or a lowercase letter.";
                clearTimeout(timeoutx);
                timeoutx = setTimeout(function(){ document.getElementById('passwordHint').innerHTML = ""; },5000);
                console.log("test");
            });
    </script>

    {{--
    <form action="{{ route('login') }}" method="POST">
        @csrf
        <input type="email" name="email" value="{{ old('email') }}">
        <input type="password" name="password">
        <input type="submit">
    </form> --}}

@endsection
