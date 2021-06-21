@extends('layouts.app')

@section('title')
    Page
@endsection

@section('contents')
    
    {{ $pageData->content }}

    {{--
    <form action="{{ route('login') }}" method="POST">
        @csrf
        <input type="email" name="email" value="{{ old('email') }}">
        <input type="password" name="password">
        <input type="submit">
    </form> --}}

@endsection
