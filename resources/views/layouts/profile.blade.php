@extends('layouts.app')

@section('title')
    Profile
@endsection

@section('contents-outside-wrapper')
<div class="w-full h-80 -mt-8 bg-black">
    <img class="w-full h-full object-cover opacity-30" src="{{ asset('assets/image/zb9tj0.jpg') }}" alt="">
</div>

@endsection

@section('contents')
<div class="flex justify-start relative z-10">
    <div class="flex-initial -mt-72">
        <div class="w-80 shadow-lg">
            <div class="w-full p-4 bg-white border-0 border-b border-solid">
                <div class="w-full h-64 bg-black">
                    <img src="{{ asset('storage/images/'.$user->image) }}" class="w-full h-full object-center object-cover" alt="">
                </div>
                <div class="mt-4">
                    <p class="text-xl font-black text-blueGray-dark">{{ $user->name }}</p>
                    <p class="text-sm text-gray-500">Cairo, Egypt</p>
                    @if($user->id != Auth::user()->id)
                    <div class="mt-5 flex">
                        <div class="flex-1 text-center rounded-3xl bg-chillBlue text-white px-8 py-2 text-lg font-bold">Contact</div>
                        <div class="p-1"></div>
                        <div class=" text-center  bg-lightBlue-300 rounded-3xl text-chillBlue px-5 py-2 text-lg font-bold"> <i class="fas fa-star"></i> </div>
                    </div>
                    @else
                    <div class="mt-5 flex">
                        <div onclick="window.location='{{ route('edit-profile',$user->id) }}'" class="flex-1 text-center rounded-3xl bg-chillBlue hover:bg-chillBlue-dark text-white px-8 py-2 text-lg font-bold cursor-pointer">Edit Profile</div>
                        <div class="p-1"></div>
                    </div>
                    @endif
                </div>
            </div>
            <div class="w-full break-words p-4 bg-white border-0 border-b border-solid">
                <div class="mb-3">
                    <p class="text-base text-gray-400 uppercase">contact email</p>
                    <p class="text-lg text-blueGray-dark font-black">{{ $user->email }}</p>
                </div>
                <div class="mb-3">
                    <p class="text-base text-gray-400 uppercase">phone number</p>
                    <p class="text-lg text-blueGray-dark font-black">{{ $user->phone }}</p>
                </div>
                <div class="mb-3">
                    <p class="text-base text-gray-400 uppercase">Birth date</p>
                    <p class="text-lg text-blueGray-dark font-black">{{ $user->birth_date }}</p>
                </div>
            </div>
            <div class="w-full p-4 bg-white border-0 border-b border-solid">
                <p class="text-base text-gray-400 uppercase">Attachments</p>
                <div class="w-full">
                    <a href="">
                        <div class="cursor-pointer group flex w-full justify-between items-center text-chillBlue">
                            <i class="fas fa-file text-2xl"></i>
                            <div class="flex-1 px-8 group-hover:underline">
                                <p class="text-blueGray-dark font-bold text-lg">xray.dcm</p>
                                <p class="text-sm text-gray-400">1.24 MB</p>
                            </div>
                            <i class="fas fa-download"></i>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="flex-auto ml-6">
        <div class="w-full">
            <h1 class="text-3xl text-blueGray-dark font-bold">
                @yield('profile-title')
            </h1>
            @yield('profile-nav')
            @yield('profile-data')
        </div>
    </div>
</div>

@endsection