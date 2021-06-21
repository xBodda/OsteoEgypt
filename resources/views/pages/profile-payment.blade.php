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
        <a href="{{ route('profile-about',$user->id) }}">About</a>
    </div>
    <div class="text-xl px-4 text-gray-400">
        <a href="{{ route('profile-appointments',$user->id) }}">Appointments</a>
    </div>
    <div class="text-xl px-4 text-gray-400">
        <a href="{{ route('profile-doctors',$user->id) }}">Doctors</a>
    </div>
    <div class="text-xl px-4 border-0 border-b-4 border-chillBlue border-solid -mb-2.5 text-blueGray-dark font-extrabold">
        <a href="{{ route('profile-payment',$user->id) }}">Payment</a>
    </div>
    <div class="text-xl px-4 text-gray-400">
        <a href="{{ route('profile-badges',$user->id) }}">Badges</a>
    </div>
</div>
@endsection
@section('profile-data')
    <div class="w-full border-l-8 border-solid border-0 border-chillBlue">
    <div class="w-full p-4 pl-10  bg-white border border-solid border-blueGray-light flex items-center relative">
        
        <div>
                <b class="text-blueGray-dark text-lg">Unpaid bill</b>
                <p class="text-gray-500 w-8/12">You have an unpaid bill, please pay it before 02/08/2021 to avoid any penalties that may be placed on your account</p>
            </div>

            <button class="w-52 absolute right-0 bottom-0 px-10 font-bold py-3 border-none bg-chillBlue text-white cursor-pointer hover:bg-chillBlue-dark">
                Pay Now
            </button>
        
    </div>
</div>

    
    
@endsection
@section('profile-title')
    Profile Details    
@endsection