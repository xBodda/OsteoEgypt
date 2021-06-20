@extends('layouts.app')

@section('title')
    Video Gallery
@endsection
@section ('contents-outside-wrapper')
<div class="bg-chillBlue-light -mt-8 pt-12 px-40 text-2xl pb-4 text-white">
    <p>Home >> <span class="font-black">Video Gallery</span></p>
</div>
@endsection
@section('contents')

<div class="inline-flex items-center px-6 py-3 ">
    <section class="py-8 px-4">
        <div class="grid grid-cols-3 gap-32 mb-20">
            <div class="w-full h-full"><img class="w-full h-full object-center object-cover rounded-xl" src="{{ asset('assets/image/pexels-karolina-grabowska-4506217.jpg') }}" >
                <p class="font-black">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sequi molestias delectus repellat aspernatur impedit similique cupiditate minus eligendi corporis voluptatibus! Voluptate illo minus ratione sint eius maiores earum eaque animi!</p>
            </div>
            <div class="w-full h-full"><img class="w-full h-full object-center object-cover rounded-xl" src="{{ asset('assets/image/pexels-photo-287237.jpeg') }}" >
                <p class="font-black">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sequi molestias delectus repellat aspernatur impedit similique cupiditate minus eligendi corporis voluptatibus! Voluptate illo minus ratione sint eius maiores earum eaque animi!</p>
            </div>
            <div class="w-full h-full"><img class="w-full h-full object-center object-cover rounded-xl" src="{{ asset('assets/image/pexels-karolina-grabowska-4506217.jpg') }}" >
                <p class="font-black">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sequi molestias delectus repellat aspernatur impedit similique cupiditate minus eligendi corporis voluptatibus! Voluptate illo minus ratione sint eius maiores earum eaque animi!</p>
            </div>
            <div class="w-full h-full"><img class="w-full h-full object-center object-cover rounded-xl" src="{{ asset('assets/image/pexels-photo-287237.jpeg') }}" >
                <p class="font-black">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sequi molestias delectus repellat aspernatur impedit similique cupiditate minus eligendi corporis voluptatibus! Voluptate illo minus ratione sint eius maiores earum eaque animi!</p>
            </div>
            <div class="w-full h-full"><img class="w-full h-full object-center object-cover rounded-xl" src="{{ asset('assets/image/pexels-karolina-grabowska-4506217.jpg') }}" >
                <p class="font-black">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sequi molestias delectus repellat aspernatur impedit similique cupiditate minus eligendi corporis voluptatibus! Voluptate illo minus ratione sint eius maiores earum eaque animi!</p>
            </div>
            <div class="w-full h-full"><img class="w-full h-full object-center object-cover rounded-xl" src="{{ asset('assets/image/pexels-photo-287237.jpeg') }}" >
                <p class="font-black">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sequi molestias delectus repellat aspernatur impedit similique cupiditate minus eligendi corporis voluptatibus! Voluptate illo minus ratione sint eius maiores earum eaque animi!</p>
            </div>
            <div class="w-full h-full"><img class="w-full h-full object-center object-cover rounded-xl" src="{{ asset('assets/image/pexels-karolina-grabowska-4506217.jpg') }}" >
                <p class="font-black">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sequi molestias delectus repellat aspernatur impedit similique cupiditate minus eligendi corporis voluptatibus! Voluptate illo minus ratione sint eius maiores earum eaque animi!</p>
            </div>
            <div class="w-full h-full"><img class="w-full h-full object-center object-cover rounded-xl" src="{{ asset('assets/image/pexels-photo-287237.jpeg') }}" >
                <p class="font-black">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sequi molestias delectus repellat aspernatur impedit similique cupiditate minus eligendi corporis voluptatibus! Voluptate illo minus ratione sint eius maiores earum eaque animi!</p>
            </div>
            <div class="w-full h-full"><img class="w-full h-full object-center object-cover rounded-xl" src="{{ asset('assets/image/pexels-karolina-grabowska-4506217.jpg') }}" >
                <p class="font-black">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sequi molestias delectus repellat aspernatur impedit similique cupiditate minus eligendi corporis voluptatibus! Voluptate illo minus ratione sint eius maiores earum eaque animi!</p>
            </div>

        </div>
    </section>
</div>
@endsection
