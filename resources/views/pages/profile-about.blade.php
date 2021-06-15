@extends('layouts.profile')

@section('title')
    Profile
@endsection

@section('contents-outside-wrapper')
<div class="w-full h-80 -mt-8 bg-black">
    <img class="w-full h-full object-cover opacity-30" src="{{ asset('assets/image/zb9tj0.jpg') }}" alt="">
</div>
@endsection

@section('profile-nav')
    <div class="font-semibold flex w-full my-4 border-0 border-b pb-2 uppercase border-solid border-blueGray-light">
    <div class="text-xl pr-4 border-0 border-b-4 border-chillBlue border-solid -mb-2.5 text-blueGray-dark font-extrabold">
        <a href="{{ route('profile-about') }}">About</a>
    </div>
    <div class="text-xl px-4 text-gray-400">
        <a href="{{ route('profile-appointments') }}">Appointments</a>
    </div>
    <div class="text-xl px-4 text-gray-400 ">
        <a href="{{ route('profile') }}">Doctors</a>
    </div>
    <div class="text-xl px-4 text-gray-400 ">
        <a href="{{ route('profile-payment') }}">Payment</a>
    </div>
</div>
@endsection

@section('profile-data')
    <b class="rounded resize-y w-full outline-none p-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Id accusamus, perferendis nisi quam dignissimos earum aperiam recusandae praesentium iure blanditiis sapiente, libero provident facilis nobis! Aliquid sit eveniet hic. Ratione!</b>
    
    
@endsection