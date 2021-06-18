@extends('layouts.app')

@section('title')
    Edit Profile
@endsection



@section('contents')
    <h1 class="text-3xl text-blueGray-dark font-bold mb-4">Edit Profile</h1>
<form action="{{ route('save-edit-profile') }}" method="POST" enctype="multipart/form-data">
    <div class="flex">
        <div class="w-4/12 bg-white shadow mr-7 h-full">
            <div class="p-6 text-white bg-chillBlue cursor-pointer  font-bold">User Info</div>
            <div class="p-6 text-chillBlue bg-white cursor-pointer  font-bold border border-solid hover:bg-chillBlue-lightest transition-all">Security</div>
            <div class="p-6 text-chillBlue bg-white cursor-pointer  font-bold border border-solid hover:bg-chillBlue-lightest transition-all">Payments & Billings</div>
            <div class="p-6 text-chillBlue bg-white cursor-pointer font-bold border border-solid hover:bg-chillBlue-lightest ">Personalize</div>
        </div>
        <div class="w-full bg-white p-6 border border-solid border-gray-200">
            <div class="flex mb-8">
             

            <div class="w-full bg-white p-6 ">
                <div class="flex mb-8">
                    <div class="h-36 w-36 mr-10 ">
                        <img class="w-full h-full object-cover border border-solid border-gray-200 " src="{{ asset('storage/images/'.Auth::user()->image) }}"/>
                        <input type="file" class="hidden" name="image" id="image">
                    </div>
                    <div>
                        <h1 class="w-full">{{ Auth::user()->name }} </h1>
                        <p class="mb-6 text-lg">Silver User</p>
                        <div id="editImage" onclick="clickImg()" class=" flex-1 text-center rounded-3xl bg-chillBlue hover:bg-chillBlue-dark text-white px-2 py-2 text-lg font-bold cursor-pointer">Edit Profile Picture</div>
                    </div>
                </div>
                
                    @csrf
                    <div class="flex">
                        <div class="flex-1 mr-4">
                            <x-input type="text"  name="fname" message="First Name" placeholder="Your First Name" value="{{ explode(' ', Auth::user()->name)[0] }}" required/>
                        </div>
                        <div class="flex-1">
                            <x-input type="text"  name="lname" message="Last Name" placeholder="Your Last Name" value="{{ explode(' ', Auth::user()->name)[1] }}" required/>
                        </div>
                    </div>
                    <x-input type="email"  name="email" message="Email Address" placeholder="Your Email Address" value="{{ Auth::user()->email }}" required/>
                    <div class="flex">
                        <div class="flex-1 mr-4">
                            <x-input type="text"  name="gender" message="Gender" placeholder="Your Gender" value="{{ Auth::user()->gender }} " required/>
                        </div>
                        <div class="flex-1">
                            <x-input type="date"  name="dob" message="Date Of Birth" placeholder="Your Date Of Birth" value="{{ Auth::user()->birth_date }} " required/>
                        </div>
                    </div>


                    <x-input type="text" name="mobile"  message="Mobile Number" placeholder="Your Mobile Number" value="{{ Auth::user()->phone }}" required/>

                    <div class="submit-button-container">
                        <input type="submit" class="submit-button font-bold" value="Save">
                    </div>
                
            </div>
        
        </div>
        </div>
    </div>
    </form>
    <script>
        function clickImg() {document.getElementById('image').click();}
    </script>
@endsection
