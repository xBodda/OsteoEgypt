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
    <div class="text-xl px-4 text-gray-400">
        <a href="{{ route('profile-payment') }}">Payment</a>
    </div>
    <div class="text-xl px-4 border-0 border-b-4 border-chillBlue border-solid -mb-2.5 text-blueGray-dark font-extrabold">
        <a href="{{ route('profile-badges') }}">Badges</a>
    </div>
</div>
@endsection
@section('profile-data')

    <div class="w-full p-4 mb-3 pl-10 bg-white border border-solid border-blueGray-light ">
    <div class="w-full items-center relative flex">
        <div>
            <img class="" src="{{ asset('assets/image/bronze.svg') }}"/>
            </div>
        <div class=" ml-8 w-full">
            
                <b class="text-blueGray-dark text-lg">Booking appointments using website 1 time</b>
                <p class="text-gray-500 w-8/12 mb-3">100 POINTS</p>
                <div class="flex items-center">
                    <div class="h-3 relative w-full rounded-full overflow-hidden">
                        <div class="w-full h-full bg-gray-200 absolute"></div>
                        <div class="h-full bg-chillBlue absolute" style="width:100%"></div>
                    </div>
                    <div class=" ml-4 mr-6 text-base text-gray-500">1/1</div>
                </div>
            </div>
            
    </div>
</div>

<div class="w-full p-4 pl-10 mb-3 bg-white border border-solid border-blueGray-light ">
    <div class="w-full items-center relative flex">
        <div>
            <img class="opacity-40" src="{{ asset('assets/image/silver.svg') }}"/>
            </div>
        <div class=" ml-8 w-full">
            
                <b class="text-blueGray-dark text-lg">Booking appointments using website 5 times</b>
                <p class="text-gray-500 w-8/12 mb-3">300 POINTS</p>
                <div class="flex items-center">
                    <div class="h-3 relative w-full rounded-full overflow-hidden">
                        <div class="w-full h-full bg-gray-200 absolute"></div>
                        <div class="h-full bg-chillBlue absolute" style="width:40%"></div>
                    </div>
                    <div class=" ml-4 mr-6 text-base text-gray-500">2/5</div>
                </div>
            </div>
            
    </div>
</div>
<div class="w-full p-4 pl-10 mb-3 bg-white border border-solid border-blueGray-light ">
    <div class="w-full items-center relative flex">
        <div>
            <img class="opacity-40" src="{{ asset('assets/image/gold.svg') }}"/>
            </div>
        <div class=" ml-8 w-full">
            
                <b class="text-blueGray-dark text-lg">Booking appointments using website 10 times</b>
                <p class="text-gray-500 w-8/12 mb-3">600 POINTS</p>
                <div class="flex items-center">
                    <div class="h-3 relative w-full rounded-full overflow-hidden">
                        <div class="w-full h-full bg-gray-200 absolute"></div>
                        <div class="h-full bg-chillBlue absolute" style="width:20%"></div>
                    </div>
                    <div class=" ml-4 mr-6 text-base text-gray-500">2/10</div>
                </div>
            </div>
            
    </div>
</div>
<div class="w-full p-4 pl-10 bg-white border border-solid border-blueGray-light ">
    <div class="w-full items-center relative flex">
        <div>
            <img class="opacity-40" src="{{ asset('assets/image/plat.svg') }}"/>
            </div>
        <div class=" ml-8 w-full">
            
                <b class="text-blueGray-dark text-lg">Booking appointments using website 10 times</b>
                <p class="text-gray-500 w-8/12 mb-3">1000 POINTS</p>
                <div class="flex items-center">
                    <div class="h-3 relative w-full rounded-full overflow-hidden">
                        <div class="w-full h-full bg-chillBlue-lightest absolute"></div>
                        <div class="h-full bg-chillBlue absolute" style="width:6.6%"></div>
                    </div>
                    <div class=" ml-4 mr-6 text-base text-gray-500">2/30</div>
                </div>
            </div>
            
    </div>
</div>
    
    
@endsection
@section('profile-title')
    Profile Details    
@endsection