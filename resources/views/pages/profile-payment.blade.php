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
    <div class="text-xl pr-4 text-gray-400">
        <a href="{{ route('profile-about') }}">About</a>
    </div>
    <div class="text-xl px-4 text-gray-400">
        <a href="{{ route('profile-appointments') }}">Appointments</a>
    </div>
    <div class="text-xl px-4 text-gray-400">
        <a href="{{ route('profile-doctors') }}">Doctors</a>
    </div>
    <div class="text-xl px-4 border-0 border-b-4 border-chillBlue border-solid -mb-2.5 text-blueGray-dark font-extrabold">
        <a href="{{ route('profile-payment') }}">Payment</a>
    </div>
</div>
@endsection

@section('profile-data')
    <div class="flex mt-7">
        <div class="p-3 py-6 rounded shadow-lg w-2/6 mr-7">
            <div class="flex items-center">
                <div class="w-14 h-14 bg-blue-600 flex justify-center items-center text-xl rounded-full text-white md:w-12 md:h-12 shadow-sm">
                    <i class="fab fa-cc-visa"></i>
                </div>
                <p class="text-lg ml-4">
                   xxxx-9653
                </p>
                
            </div>
            <p class="w-full text-right text-red-800 cursor-pointer">
                Remove
            </p>
        </div>
        
        <div class="p-3 py-6 rounded shadow-lg w-2/6">
            <div class="flex items-center">
                <div class="w-14 h-14 bg-red-600 flex justify-center items-center text-xl rounded-full text-white md:w-12 md:h-12 shadow-sm">
                    <i class="fab fa-cc-mastercard"></i>
                </div>
                <p class="text-lg ml-4">
                   xxxx-5898
                </p>
                
            </div>
            <p class="w-full text-right text-red-800 cursor-pointer">
                Remove
            </p>
        </div>
    </div>

    <hr class="sep mt-7 mb-7">

    
@endsection

@section('profile-title')
    Profile Details    
@endsection