@extends('layouts.app')

@section('title')
    Personalize
@endsection



@section('contents')
    <h1 class="text-3xl text-blueGray-dark font-bold mb-4">Edit Profile</h1>
<form action="{{ route('save-edit-profile') }}" method="POST" enctype="multipart/form-data">
    <div class="flex">
        <div class="w-4/12 bg-white shadow mr-7 h-full">
            <div class="p-6 text-chillBlue bg-white cursor-pointer  font-bold border border-solid hover:bg-chillBlue-lightest transition-all">User Info</div>
            <div class="p-6 text-chillBlue bg-white cursor-pointer font-bold border border-solid hover:bg-chillBlue-lightest ">Security</div>
            <div class="p-6 text-chillBlue bg-white cursor-pointer font-bold border border-solid hover:bg-chillBlue-lightest ">Payments & Billings</div>
            <div class="p-6 text-white bg-chillBlue cursor-pointer  font-bold">Personalize</div>

        </div>
        <div class="w-full bg-white p-6 border border-solid border-gray-200">
            <div class="flex mb-0">
             

            <div class="w-full bg-white p-6 pb-0 ">
              
                
                    @csrf
                    <div class="flex">
                        <div class="w-max ">
                        <img class="object-cover border border-solid border-gray-200 " src="{{ asset('assets/image/Cover1.png') }}"/>
                        </div>
                    </div>
                    <div class="h-32 w-full grid grid-cols-5 grid-rows-1 gap-2">
                        <div class="w-full h-full bg-black">
                            <img src="{{asset('assets/image/Cover1.png')}}" class="h-full w-full object-cover object-center">
                        </div>
                        <div class="w-full h-full bg-black">
                            <img src="{{asset('assets/image/Cover1.png')}}" class="h-full w-full object-cover object-center">
                        </div>
                        <div class="w-full h-full bg-black">
                            <img src="{{asset('assets/image/Cover1.png')}}" class="h-full w-full object-cover object-center">
                        </div>
                        <div class="w-full h-full bg-black">
                            <img src="{{asset('assets/image/Cover1.png')}}" class="h-full w-full object-cover object-center">
                        </div>
                        <div class="w-full h-full bg-black">
                            <img src="{{asset('assets/image/Cover1.png')}}" class="h-full w-full object-cover object-center">
                        </div>
                    </div>
                     <div class="submit-button-container">
                        <input type="submit" class="submit-button font-bold" value="Save">
                    </div>
                   
            </div>
          
        </div>
    </div>
    </div>
    </form>
    <script>
        // function clickImg() {document.getElementById('image').click();}
    </script>
@endsection
