@extends('layouts.app')

@section('title')
    {{$pageData->page_name}}
@endsection

@section('contents')

    <div class="break-all">
        {!! str_replace('&nbsp;', ' ', $pageData->content ) !!}
    </div>
    

    {{--
    <form action="{{ route('login') }}" method="POST">
        @csrf
        <input type="email" name="email" value="{{ old('email') }}">
        <input type="password" name="password">
        <input type="submit">
    </form> --}}

@endsection
