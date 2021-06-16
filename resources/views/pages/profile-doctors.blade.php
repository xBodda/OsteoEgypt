@extends('layouts.profile')

@section('title')
    Profile
@endsection

@section('contents-outside-wrapper')
<div class="w-full h-80 -mt-8 bg-black">
    <img class="w-full h-full object-cover opacity-30" src="{{ asset('assets/image/zb9tj0.jpg') }}" alt="profile">
</div>
@endsection

@section('profile-nav')
    <div class="font-semibold flex w-full my-4 border-0 border-b pb-2 uppercase border-solid border-blueGray-light">
    <div class="text-xl pr-4 text-gray-400">
        <a href="{{ route('profile-about') }}">About</a>
    </div>
    <div class="text-xl px-4 text-gray-400">
        <a href="{{ route('profile-appointments') }}">Appointments</a>
    </div>
    <div class="text-xl px-4 border-0 border-b-4 border-chillBlue border-solid -mb-2.5 text-blueGray-dark font-extrabold">
        <a href="{{ route('profile-doctors') }}">Doctors</a>
    </div>
    <div class="text-xl px-4 text-gray-400 ">
        <a href="{{ route('profile-payment') }}">Payment</a>
    </div>
</div>
@endsection

@section('profile-data')
    <div class="w-full p-4 bg-white shadow flex items-center relative">
        <div class="w-24 h-24 mr-10">
            <img class="w-full h-full object-cover" src="{{ asset('assets/image/profile-img.jpg') }}"/>
        </div>

        <div>
            <b>Hagar Mohamed Refaat</b>
            <p class="mt-3">Silver User</p>
        </div>

        <button class="absolute right-0 bottom-0 px-10 py-3 border-none bg-chillBlue text-white cursor-pointer">
            View Profile
        </button>
    </div>

    
    
@endsection