@extends('layouts.app')

@section('title')
    Gallery
@endsection
@section ('contents-outside-wrapper')
<div class="bg-chillBlue-light -mt-8 pt-12 px-40 text-2xl pb-4 text-white">
    <p>Home >> <span class="font-black">Photo Gallery</span></p>
</div>
@endsection
@section('contents')

<div class="inline-flex items-center px-6 py-3 ">
    <section class="py-8 px-4">
        <div class="grid grid-cols-3 gap-4">
            <div class="w-full h-full relative bg-black hover:opacity-70 cursor-pointer "><img class="w-full h-full object-center object-cover cursor-pointer " src="{{ asset('assets/image/pexels-karolina-grabowska-4506217.jpg') }}" ></div>
            <div class="w-full h-full relative bg-black hover:opacity-70 cursor-pointer "><img class="w-full h-full object-center object-cover" src="{{ asset('assets/image/pexels-photo-287237.jpeg') }}" ></div>
            <div class="w-full h-full relative bg-black hover:opacity-70 cursor-pointer "><img class="w-full h-full object-center object-cover" src="{{ asset('assets/image/pexels-karolina-grabowska-4506217.jpg') }}" ></div>
            <div class="w-full h-full relative bg-black hover:opacity-70 cursor-pointer "><img class="w-full h-full object-center object-cover" src="{{ asset('assets/image/pexels-photo-287237.jpeg') }}" ></div>
            <div class="w-full h-full relative bg-black hover:opacity-70 cursor-pointer "><img class="w-full h-full object-center object-cover" src="{{ asset('assets/image/pexels-karolina-grabowska-4506217.jpg') }}" ></div>
            <div class="w-full h-full relative bg-black hover:opacity-70 cursor-pointer "><img class="w-full h-full object-center object-cover" src="{{ asset('assets/image/pexels-photo-287237.jpeg') }}" ></div>
            <div class="w-full h-full relative bg-black hover:opacity-70 cursor-pointer "><img class="w-full h-full object-center object-cover" src="{{ asset('assets/image/pexels-karolina-grabowska-4506217.jpg') }}" ></div>
            <div class="w-full h-full relative bg-black hover:opacity-70 cursor-pointer "><img class="w-full h-full object-center object-cover" src="{{ asset('assets/image/pexels-photo-287237.jpeg') }}" ></div>
            <div class="w-full h-full relative bg-black hover:opacity-70 cursor-pointer "><img class="w-full h-full object-center object-cover" src="{{ asset('assets/image/pexels-karolina-grabowska-4506217.jpg') }}" ></div>

        </div>
    </section>
</div>
@endsection
