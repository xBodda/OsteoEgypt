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
        <a href="{{ route('profile-about',$user->id) }}">About</a>
    </div>
    <div class="text-xl px-4 text-gray-400">
        <a href="{{ route('profile-appointments',$user->id) }}">Appointments</a>
    </div>
    <div class="text-xl px-4 border-0 border-b-4 border-chillBlue border-solid -mb-2.5 text-blueGray-dark font-extrabold">
        <a href="{{ route('profile-doctors',$user->id) }}">Doctors</a>
    </div>
    <div class="text-xl px-4 text-gray-400 ">
        <a href="{{ route('profile-payment',$user->id) }}">Payment</a>
    </div>
    <div class="text-xl px-4 text-gray-400">
        <a href="{{ route('profile-badges',$user->id) }}">Badges</a>
</div>
</div>
@endsection

@section('profile-data')

    @foreach ($favorites as $fav)
        <div class="w-full p-1 md-p-4 mb-4 bg-white border border-solid border-blueGray-light flex items-center relative">
            <div class="w-24 h-24 mr-2 md:mr-10">
                <img class="w-full h-full object-cover" src="{{ asset('storage/images/'.$fav->favorite->image) }}"/>
            </div>

            <div>
                <b class="text-sm md:text-xl">{{ $fav->favorite->name }}</b>
                <p class="mt-0 md:mt-2 text-xs md:text-base text-gray-500 ">Physical therapist - IAO Fifth year</p>
            </div>

            <a href="{{ route('profile-about',$fav->favorite->id) }}"><button class="w-36 md:w-52 absolute right-0 bottom-0 px-1 md:px-10 font-bold py-1 md:py-3 md:text-sm border-none bg-chillBlue text-white cursor-pointer hover:bg-chillBlue-dark">
                View Profile
            </button></a>
        </div>
    @endforeach

    
    
@endsection

@section('profile-title')
    Profile Details    
@endsection