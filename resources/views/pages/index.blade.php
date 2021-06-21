@extends('layouts.app')

@section('title')
    Home
@endsection

@section('contents-outside-wrapper')
    <div class="text-white w-full relative home-top-banner flex justify-center items-center flex-col">
        <h1>Your Health is our priority</h1>
        <div class="max-w-2xl text-center mt-5">
            <p>Doctors of Osteopathic Medicine are fully licensed physicians who practice in all areas of medicine, emphasizing a whole-person approach to treatment and care. Our primary team work to keep you and your whole family healthy and strong each and every day.</p>
        </div>
        <x-button class="mt-12" text="Learn More"/>
    </div>

    <div class="flex justify-center items-center max-w-4-xl flex-wrap md:flex-nowrap transform -translate-y-20 md:-translate-y-1/3">
        <div class="text-center home-info-item flex justify-center items-center flex-col mb-12 md:mx-12 w-full md:w-96">
            <div class="item rounded-3xl bg-white flex justify-center items-center shadow-xl flex-col hover:bg-chillBlue-lightest cursor-pointer">
                <img src="{{ asset('assets/svg/Mask Group 3.svg') }}">
                <p class="text-chillBlue text-2xl mt-2 font-bold">Schedule An Appointment</p>
            </div>
            <p class="text-md mt-3">When you visit our clinic you can expect to receive world class care. Expert osteopath specialists and caring clinical staff provide you with an exceptional health care experience.</p>
        </div>
        <div class="text-center home-info-item flex justify-center items-center flex-col mb-12 md:mx-12 w-full md:w-96">
            <div class="item rounded-3xl bg-white flex justify-center items-center shadow-xl flex-col hover:bg-chillBlue-lightest cursor-pointer">
                <img src="{{ asset('assets/svg/Mask Group 2.svg') }}">
                <p class="text-chillBlue text-2xl mt-2 font-bold">Our Doctors</p>
            </div>
            <p class="text-md mt-3">Personalized patient care is what sets OsteoEgypt apart. When you visit our clinic you can expect to receive world class care. Expert physician specialists and caring clinical staff provide you with an exceptional health care experience.</p>
        </div>
        <div class="text-center home-info-item flex justify-center items-center flex-col mb-12 md:mx-12 w-full md:w-96">
            <div class="item rounded-3xl bg-white flex justify-center items-center shadow-xl flex-col hover:bg-chillBlue-lightest cursor-pointer">
                <img src="{{ asset('assets/svg/Mask Group 1.svg') }}">
                <p class="text-chillBlue text-2xl mt-2 font-bold">Medical Services</p>
            </div>
            <p class="text-md mt-3">On your first visit to The Osteopathic Clinic, a thorough case history will be taken, including your present condition and your medical history.  The more details you can furnish the osteopath with at this stage, the better.</p>
        </div>
    </div>

    <div id="section-1" class='text-center paddingx-144'>
    <div class="text-2xl">
        <h1 class="text-chillBlue ">
            Welcome to OsteoEgypt
        </h1>
    </div>
    <p class="max-w-3xl mx-auto mt-8">
        Personalized patient care is what sets OsteoEgypt apart. When you visit our clinic you can expect to receive world class care. Expert physician specialists and caring clinical staff provide you with an exceptional health care experience. OsteoEgypt Clinic is a center set up and run by Dr. Hesham Khalil to promote osteopathy to the medical community and the general public and to ensure osteopathic excellence in Egypt and the Middle East. We want to give you the best treatment you can get.
    </p>
    <div class="mt-8 grid grid-cols-3 grid-rows-1 gap-2 h-96">
        <div >
            <img class="w-full h-full object-cover object-center" src="{{ asset('assets/image/Group 534.jpg') }}" alt="">
        </div>
        <div class="object-cover object-center">
            <img class="w-full h-full object-cover object-center" src="{{ asset('assets/image/Group 76.jpg') }}" alt="">
        </div>
        <div class="object-cover object-center">
            <img class="w-full h-full object-cover object-center" src="{{ asset('assets/image/Group 8.jpg') }}" alt="">
        </div>
    </div>
    <p class="max-w-3xl mx-auto mt-8">
        Osteopathy is an approach to health that is rapidly growing in popularity and recognition throughout the world.  It was developed in the 1870’s by Andrew Taylor Still, a doctor from Missouri, USA, and is now seen as one of the most comprehensive, effective and scientifically valid forms of treatment available. Your body is designed to heal itself. Osteopathy is drug-free non-invasive manual medicine that help your body to heal by treating and strengthening the musculoskeletal framework, which includes the joints, muscles and spine
    </p>
</div>
<div id="section-2" class="flex mt-20 paddingx-144">
    <div class="w-full lg:w-3/5">
        <div class="text-chillBlue text-xl pr-20 mb-8">
            <h1>How Osteopathy Works?</h1>
        </div>
        <p>
            The first of the major principles of osteopathic medicine is that the human body is a unit, an integrated organism in which no part functions independently. This regulation, coordination and integration of the body through multiple biological systems is often referred to as the principle of body unity. According to this principle, abnormalities in the structure or function of one part of the body may unfavorably influence other parts, and eventually, the body as a whole. Thus the body is viewed as an interrelated group of organ systems, each one dependent on the others, and each one compensating along with the others in order to meet the demands of the internal and external environments of the body.

Doctor Still believed that diseases affecting the viscera of the body would also affect the musculoskeletal system. Similarly, abnormalities in the structure or function of the musculoskeletal system could also adversely affect the viscera. Until Still’s time, treatment of disease was focused on individual organs or organ systems. Consideration was not given to the musculoskeletal system, which in itself comprises more than sixty percent of the body’s mass. Doctor Still recognized the importance of the musculoskeletal system and its relationship to health and disease, and added the treatment of this system to his use of traditional methods such as pharmaceutical agents and surgery.

In spite of recent increased interest in holistic approaches to patient care, there is still a common tendency among physicians to isolate illness within a certain organ or system in the body. The osteopathic physician, however, is trained to recognize that when the body is sick, it is sick all over. A specific organ or system may become the prime focus of illness, but the effects of that illness can be felt in some degree throughout the entire body.
        </p>
        <x-button class="mt-10" text="Read More >>"/>
    </div>
    <div class="w-2/5 pl-10 hidden lg:block">
        <div class="w-full h-full">
            <img src="{{ asset('assets/image/Group 533.jpg') }}" class="w-full h-full object-cover object-center">
        </div>
    </div>
</div>
<div id="section-3" class="w-full h-96 sm:h-80 bg-chillBlue mt-20 relative paddingx-144">
    <div class="absolute w-full h-full top-0 left-0">
        <img src="{{ asset('assets/image/pexels-karolina-grabowska-4506113.jpg') }}" class="w-full h-full object-center object-cover">
    </div>
    <div class="absolute w-full h-full top-0 left-0 bg-blueGray-darkest opacity-60">
    </div>
    <div class="absolute w-full h-full top-0 left-0 bg-chillBlue opacity-20">
    </div>
    <div class="absolute w-full h-full top-0 left-0 text-white flex justify-around items-center md:flex-nowrap flex-wrap">
        <div class="flex flex-col text-center text-lg w-full sm:w-1/2 md:w-auto">
            <div class="text-2xl font-black">
                <h1>168</h1>
            </div>
            <p class="mt-4">Happy To Serve Patients</p>
        </div>
        <div class="flex flex-col text-center text-lg w-full sm:w-1/2 md:w-auto">
            <div class="text-2xl font-black">
                <h1>6</h1>
            </div>
            <p class="mt-4">Sub Specialties</p>
        </div>
        <div class="flex flex-col text-center text-lg w-full sm:w-1/2 md:w-auto">
            <div class="text-2xl font-black">
                <h1>4</h1>
            </div>
            <p class="mt-4">Outpatient Clinics</p>
        </div>
        <div class="flex flex-col text-center text-lg w-full sm:w-1/2 md:w-auto">
            <div class="text-2xl font-black">
                <h1>12</h1>
            </div>
            <p class="mt-4">Corporate Lines</p>
        </div>
    </div>

</div>
<div id="section-4" class="mt-20">
    <div class="text-chillBlue text-xl text-center">
        <h1>Our High Qualified Doctors</h1>
    </div>
    <p class="text-center mx-auto max-w-3xl mt-8">
        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata.
    </p>
    <div class="w-full py-14 relative">
        <div class="absolute top-0 left-0 w-full h-full">
            <img src="{{ asset('assets/image/doctors-carousel-background.jpg') }}" class="h-full w-full object-cover object-left" alt="">
        </div>
        <div class="embla relative z-10">
            <div class="embla__viewport">
                <div class="embla__container ml-0 xl:ml-96">
                    @for ($i = 0; $i <15; $i++)
                        <div class="embla__slide min-w-full sm:min-w-1/2 lg:min-w-1/4">
                            <div class="p-5 w-full border border-solid border-gray-400 bg-white">
                                <div class="w-full h-52 overflow-hidden border border-solid border-gray-200">
                                    <img class="w-full h-full object-top object-cover" src="{{ asset('assets/image/pexels-cedric-fauntleroy-4270371.jpg') }}" >
                                    
                                </div>
                                <div class="w-full text-center mt-2">
                                    <div class="text-blueGray-dark text-xl font-extrabold">
                                        Doctor's Name
                                    </div>
                                    <div class="text-gray-500 text-lg">
                                        Lorem ipsum dolor sit amet 
                                    </div>
                                    <a href="#"><div class="rounded-full py-2 px-4 md:px-8  lg:px-18 mt-4 text-white table mx-auto bg-chillBlue text-while font-bold hover:bg-chillBlue-dark">
                                        View Profile
                                    </div></a>
                                </div>
                            </div>
                        </div>
                    @endfor
                </div>
            </div>
        </div>
        <x-button class="mx-auto mt-8 relative z-10" text="See More >>"></x-button>

    </div>
    
    
    {{-- <div class="flex mt-8">
        <div class="w-1/3 px-10">
            <div class=" w-full">
                <img class="h-full w-full object-center object-cover" src="{{ asset('assets/image/Group 83.jpg') }}" alt="">
            </div>
            <p class="text-2xl font-bold text-chillBlue">
                <span>Dr. Leo William</span>
            </p>
            <p>Expert Osteopath</p>
        </div>
        <div class="w-1/3 px-10">
            <div class=" w-full">
                <img class="h-full w-full object-center object-cover" src="{{ asset('assets/image/Group 16.jpg') }}" alt="">
            </div>
            <p class="text-2xl font-bold text-chillBlue">
                <span>Dr. Leo William</span>
            </p>
            <p>Expert Osteopath</p>
        </div>
        <div class="w-1/3 px-10">
            <div class=" w-full">
                <img class="h-full w-full object-center object-cover" src="{{ asset('assets/image/Group 82.jpg') }}" alt="">
            </div>
            <p class="text-2xl font-bold text-chillBlue">
                <span>Dr. Leo William</span>
            </p>
            <p>Expert Osteopath</p>
        </div>
    </div> --}}
</div>
@endsection

@section('contents')

@endsection
