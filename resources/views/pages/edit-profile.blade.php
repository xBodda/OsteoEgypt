@extends('layouts.app')

@section('title')
    Edit Profile
@endsection



@section('contents')
    <h1 class="text-3xl text-blueGray-dark font-bold mb-4">Edit Profile</h1>
    <div class="flex">
        <div class="w-4/12 bg-white shadow mr-7 h-full">
            <div class="p-6 text-white bg-chillBlue cursor-pointer  font-bold">User Info</div>
            <div class="p-6 text-chillBlue bg-white cursor-pointer  font-bold border border-solid hover:bg-chillBlue-lightest">Privacy</div>
            <div class="p-6 text-chillBlue bg-white cursor-pointer  font-bold border border-solid hover:bg-chillBlue-lightest">Payment</div>
            <div class="p-6 text-chillBlue bg-white cursor-pointer font-bold border border-solid hover:bg-chillBlue-lightest ">Settings</div>
        </div>
        <div class="w-full bg-white p-6 shadow">
            <div class="flex mb-8">
                <div class="h-36 w-36 mr-10 ">
                    <img class="w-full h-full object-cover border border-solid border-gray-500 shadow" src="{{ asset('assets/image/profile-img.jpg') }}"/>
                </div>
                <div>
                    <h1 class="w-full">Abdelrahman Sayed </h1>
                    <p class="mb-6 text-lg">Silver User</p>
                    <div class=" flex-1 text-center rounded-3xl bg-chillBlue hover:bg-chillBlue-dark text-white px-2 py-2 text-lg font-bold cursor-pointer">Edit Profile Picture</div>
                </div>
            </div>
            <form action="{{ route('edit-profile') }}" method="GET">
                @csrf
                <div class="flex">
                    <div class="flex-1 mr-4">
                        <x-input type="text"  name="fname" message="First Name" placeholder="Your First Name"/>
                    </div>
                    <div class="flex-1">
                        <x-input type="text"  name="lname" message="Last Name" placeholder="Your Last Name"/>
                    </div>
                </div>
                <x-input type="email"  name="email" message="Email Address" placeholder="Your Email Address"/>
                <div class="flex">
                    <div class="flex-1 mr-4">
                        <x-input type="text"  name="gender" message="Gender" placeholder="Your Gender"/>
                    </div>
                    <div class="flex-1">
                        <x-input type="date"  name="dob" message="Date Of Birth" placeholder="Your Date Of Birth"/>
                    </div>
                </div>


                <x-input type="text" name="mobile"  message="Mobile Number" placeholder="Your Mobile Number" value="" />

                <div class="submit-button-container">
                    <input type="submit" class="submit-button font-bold" value="Save">
                </div>
            </form>
        </div>
    </div>
@endsection
