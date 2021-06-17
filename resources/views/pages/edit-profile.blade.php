@extends('layouts.app')

@section('title')
    Edit Profile
@endsection

@section('contents-outside-wrapper')
<div class="w-full h-80 -mt-8 bg-black">
    <img class="w-full h-full object-cover opacity-30" src="{{ asset('assets/image/zb9tj0.jpg') }}" alt="">
</div>
@endsection

@section('contents')
    <h1 class="text-3xl text-blueGray-dark font-bold mb-4">Edit Profile</h1>
    <div class="flex">
        <div class="w-2/6 bg-white shadow mr-7">
            <div class="p-6 text-white bg-blueGray cursor-pointer text-center font-bold">User Info</div>
            <div class="p-6 text-blueGray bg-white cursor-pointer text-center font-bold border border-solid hover:bg-blueGray hover:text-white transition-all">Privacy</div>
            <div class="p-6 text-blueGray bg-white cursor-pointer text-center font-bold border border-solid hover:bg-blueGray hover:text-white transition-all">Payment</div>
            <div class="p-6 text-blueGray bg-white cursor-pointer text-center font-bold border border-solid hover:bg-blueGray hover:text-white transition-all">Settings</div>
        </div>
        <div class="w-4/6 bg-white p-6 shadow">
            <div class="flex">
                <div class="h-36 w-36 mr-10">
                    <img class="w-full h-full object-cover" src="{{ asset('assets/image/profile-img.jpg') }}"/>
                </div>
                <div>
                    <h1 class="w-full">Hagar Mohamed Refaat</h1>
                    <p class="mb-6">Cairo, Egypt</p>
                    <div class="flex-1 text-center rounded-3xl bg-chillBlue text-white px-2 py-2 text-lg font-bold cursor-pointer">Edit Profile Picture</div>
                </div>
            </div>
            <form action="{{ route('edit-profile') }}" method="GET">
                @csrf

                
                
                <x-input type="email"  name="email" message="Email Address" placeholder="Your Email Address"/>
                <x-input type="password" name="password"  message="Password" placeholder="Password" value="" />
                <x-input type="password" name="password_confirmation"  message="Confirm Password" placeholder="Confirm Password" value="" />

                <div class="submit-button-container">
                    <input type="submit" class="submit-button" value="Sign Up">
                </div>
            </form>
        </div>
    </div>
@endsection
