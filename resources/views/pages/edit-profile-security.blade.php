@extends('layouts.app')

@section('title')
    Security
@endsection



@section('contents')
    <h1 class="text-3xl text-blueGray-dark font-bold mb-4">Edit Profile</h1>
<form action="{{ route('changePassword') }}" method="POST">
    @if(Session::has('success'))
        <div class="border-0 border-l-4 border-solid border-green-600">
            <div class="w-full px-8 py-4 mb-4 rounded bg-green-100 text-green-900">
                {{ Session::get('success') }}
            </div>
        </div>
    @endif
    <div class="flex">
        <div class="w-4/12 bg-white shadow mr-7 h-full">
            <a href="{{ route('edit-profile') }}"><div class="p-6 text-chillBlue bg-white cursor-pointer font-bold border border-solid hover:bg-chillBlue-lightest transition-all">User Info</div>
            <a href="{{ route('edit-profile-security') }}"><div class="p-6 text-white bg-chillBlue cursor-pointer font-bold">Security</div></a>
            <div class="p-6 text-chillBlue bg-white cursor-pointer  font-bold border border-solid hover:bg-chillBlue-lightest transition-all">Payments & Billings</div>
            <a href="{{ route('edit-profile-personalize') }}"><div class="p-6 text-chillBlue bg-white cursor-pointer font-bold border border-solid hover:bg-chillBlue-lightest ">Personalize</div></a>
        </div>
        <div class="w-full bg-white p-6 border border-solid border-gray-200">
            <div class="flex mb-0">
             

            <div class="w-full bg-white p-6 pb-0 ">
                    @csrf
                    <div class="flex">
                        <div class="flex-1 mr-4">
                            
                            <x-input type="password" name="current_password" message="Old Password" placeholder="" value="" required/>
                        </div>
                    </div>
                    <div class="flex-1 mr-4">
                        <x-input type="password" name="new-password" message="New Password" placeholder="" value="" required/>
                    </div>
                    <div class="flex-1 mr-4 mb-0">
                        <x-input type="password" name="new-password_confirmation" message="Confirm New Password" placeholder="" value="" required/>
                    </div>
                    <p class="font-semibold mb-2">Make sure it's at least 8 characters including a letter & a number.</p>
                    <a class="font-bold text-chillBlue underline cursor-pointer	hover:text-chillBlue-dark">I forgot password</a>
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
