@extends('layouts.app')

@section('title')
    Edit Profile
@endsection



@section('contents')
    <h1 class="text-3xl text-blueGray-dark font-bold mb-4">Edit Profile</h1>

   
                 
    
            

    <form action="{{ route('save-edit-profile') }}" method="POST" enctype="multipart/form-data">
        <div class="flex">
            <div class="w-4/12 bg-white shadow mr-7 h-full">
                <a href="{{ route('edit-profile') }}"><div class="p-6 text-white bg-chillBlue cursor-pointer  font-bold">User Info</div>
                <a href="{{ route('edit-profile-security') }}"><div class="p-6 text-chillBlue bg-white cursor-pointer  font-bold border border-solid hover:bg-chillBlue-lightest transition-all">Security</div></a>
                <div class="p-6 text-chillBlue bg-white cursor-pointer  font-bold border border-solid hover:bg-chillBlue-lightest transition-all">Payments & Billings</div>
                <a href="{{ route('edit-profile-personalize') }}"><div class="p-6 text-chillBlue bg-white cursor-pointer font-bold border border-solid hover:bg-chillBlue-lightest ">Personalize</div></a>
            </div>
            <div class="w-full bg-white p-6 border border-solid border-gray-200">
                @if(Session::has('success'))
                    <div class="border-0 border-l-4 border-solid border-green-600">
                        <div class="w-full px-8 py-4 mb-4 rounded bg-green-100 text-green-900">
                            {{ Session::get('success') }}
                        </div>
                    </div>
                @endif
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
                            <x-select name="gender" message="Gender" placeholder="Your Gender" required>
                                <option value="1" @if(Auth::user()->gender == 1) selected @endif>Male</option>
                                <option value="0" @if(Auth::user()->gender == 0) selected @endif>Female</option>
                            </x-select>
                        </div>
                        <div class="flex-1">
                            <x-input type="date"  name="dob" message="Date Of Birth" placeholder="Your Date Of Birth" value="{{ date('Y-m-d',strtotime(Auth::user()->birth_date)) }}" required/>
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
