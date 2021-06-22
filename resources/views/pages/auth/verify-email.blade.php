@extends('layouts.app')

@section('title')
    Verify Email
@endsection

@section('contents')
    <div class="box-container">
        <div class="form-container">
            <div class="heading">
                <h1 class="text-4xl">Please Verify Your Email</h1>
            </div>
            <p class="text-2xl">
                <i class="fas fa-check-circle text-green-600 "></i> 
                A verification link has been sent to your email account</p>
            <div class="text-lg border-0 border-t mt-4 pt-4 border-solid  border-gray-200">
                Please click on the link that has just been sent to your email account to verify your email and continue registration process.
            </div>
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
