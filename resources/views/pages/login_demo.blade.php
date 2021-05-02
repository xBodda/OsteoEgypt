@extends('layouts.app')

@section('title')
    Login
@endsection

@section('contents')

    @if(session('status'))
        <div class="alert alert-fail">
            {{ session('status') }}
        </div>
    @endif
    <form action="{{ route('login') }}" method="POST">
        @csrf
        <input type="email" name="email" value="{{ old('email') }}">
        <input type="password" name="password">
        <input type="submit">
    </form>

@endsection
