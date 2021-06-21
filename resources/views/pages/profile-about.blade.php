@extends('layouts.profile')

@section('title')
    Profile
@endsection

@section('contents-outside-wrapper')
<div class="w-full h-80 -mt-8 bg-black">
    <img class="w-full h-full object-cover opacity-30" src="{{ asset('assets/image/zb9tj0.jpg') }}" alt="">
</div>
@endsection

@section('profile-nav')
<div class="font-semibold flex w-full my-4 border-0 border-b pb-2 uppercase border-solid border-blueGray-light">
    <div class="text-xl pr-4 border-0 border-b-4 border-chillBlue border-solid -mb-2.5 text-blueGray-dark font-extrabold">
        <a href="{{ route('profile-about',$user->id) }}">About</a>
    </div>
    <div class="text-xl px-4 text-gray-400">
        <a href="{{ route('profile-appointments',$user->id) }}">Appointments</a>
    </div>
    <div class="text-xl px-4 text-gray-400">
        <a href="{{ route('profile-doctors',$user->id) }}">Doctors</a>
    </div>
    <div class="text-xl px-4 text-gray-400 ">
        <a href="{{ route('profile-payment',$user->id) }}">Payment</a>
    </div>
    <div class="text-xl px-4 text-gray-400">
        <a href="{{ route('profile-badges') }}">Badges</a>
</div>
</div>
@endsection

@section('profile-data')
    <div class="bg-white px-12 py-8 shadow border-solid border border-blueGray-light mb-5">
        <div class="text-xl"><b>Where It All Began</b></div>
       
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id accusamus, perferendis nisi quam dignissimos earum aperiam recusandae praesentium iure blanditiis sapiente, libero provident facilis nobis! Aliquid sit eveniet hic. Ratione! Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni facilis culpa ipsam a asperiores iusto quos iste repudiandae fugit? Iure illo optio vero? Ab non vero, perferendis, quisquam velit eius culpa totam iure repellat et tenetur unde. Deleniti, tempore pariatur.</p>
    </div>

    <div class="bg-white px-12 py-8 shadow border-solid border border-blueGray-light mb-5">
        <div class="text-xl"><b>Training And Education</b></div>
        
        <p>Postgraduate researcher & Thesis writer -Osteopathic Medicine 2010
            Graduate OF Canadian College of Osteopathy/ Toronto –Canada 2007
            Bsc. Degree of Physical Therapy Cairo University, Faculty of Physical Therapy 1985
            Hesham Khalil was born in Egypt and currently resides in the states.  He has received his BS in Physical Therapy from Cairo University (Egypt, 1985) and is also a graduate of the Canadian College of Osteopathy (Canada 2007).  Hesham has had extensive postgraduate training in Fascia, Global Osteopathic Approach, Cranial Manipulations, and Visceral Manipulations by the top leading professors in Osteopathy in Canada, U.S.A., and U.K.

            Hesham is an active member of the World Osteopathic Health Organization, and The Chicago Cranial Study Group since 2008, as well as leads a study group (Paulson Rehabilitation Center – Willowbrook, IL USA under Global Manual Approach) designed specifically for PTs and MDs

            Hesham (as he prefers to be called by his patients) has taken over 35 classes across the US, UK, and Canada thus far and is skilled in multiple techniques and modalities.  As his learning deepens by working with others he is always searching for the commonalities between different practitioners and healing styles.  He continues to strive to integrate this learning into principles that are easily taught to others, both patients and colleagues.

            Hesham has taught courses and given presentations here in the U.S. as well as in, where he works yearly as a locum osteopath. Has presented internationally, on various Global Manual Osteopathic Approach topics in Egypt, Qatar, UAE, Sudan, Oman, Kuwait and Saudi Arabia. Hesham has been promoting Global Osteopathic approach to the Middle East Arab countries since 2005 also he is the founder of the first Osteopathic society (EOS- Cairo) in the Middle East area., He continues to study and learn from numerous sources, applying that knowledge to his work and teaching. Which augments his practice through continuing education courses and case study work.

            He founded the Egyptian Osteopathic Society. He impacted Curriculum Changes in some Egyptian university to include the Global Osteopathic thinking as a part of Diagnosis and treatment of Common Somatic Dysfunctions, he has been enjoying spreading his “vision” of how osteopathy can be practiced to his patients and colleagues. 

            Hesham enjoys immensely working with people and sees patients from the birthing process through the end of life for a multitude of conditions.  To learn more or to find out if osteopathy can help you please call the office.
        </p>
    </div>
    
@endsection

@section('profile-title')
    Profile Details    
@endsection