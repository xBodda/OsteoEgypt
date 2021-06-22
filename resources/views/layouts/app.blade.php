<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Link to the Icons -->
    <script src="https://kit.fontawesome.com/b1361fb5d5.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@200;300;400;500;700;800;900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@400;600;700;800;900&display=swap" rel="stylesheet">    
    <link href="{{ asset('assets/image/favicon.jpg') }}" rel="shortcut icon" type="image/png">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>    <link href="{{ asset('assets/css/master.css') }}" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js" integrity="sha512-qTXRIMyZIFb8iQcfjXWCO8+M5Tbc38Qi5WzdPOYZHIlZpzBHG3L3by84BBBOiRGiEb7KKtAOAs5qYdUiZiQNNQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script defer src="{{ asset('assets/js/app.js') }}"></script>
    <title>@yield('title') – OsteoEgypt</title>
</head>

<body>
    <div class="header z-10 relative" >
        <div class="lg:flex py-4 px-4 lg:px-36 w-full items-center hidden  justify-between">
            <div class="flex">
                <a class="mx-4 text-sm xl:text-base" href="{{ route('faq') }}">
                    <div>FAQ</div>
                </a>
                <a class="mx-4 text-sm xl:text-base" href="{{ route('appointment-booking') }}">
                    <div>REQUEST AN APPOINTMENT</div>
                </a>
                <a class="mx-4 text-sm xl:text-base" href="{{ route('contact') }}">
                    <div>CONTACT US</div>
                </a>
            </div>
            {{-- callto:, while supported by Skype, is not a standard and should be avoided unless specifically targeting Skype users. --}}
            <div class="call-section flex">
                <p class=" text-right cursor-pointer xl:text-base text-sm text-blueGray-dark"><a href="tel:+201158999135"><i class="fas fa-phone-alt"></i>
                    Call Us (+20) 11 5899 9135</a></p>
            </div>
        </div>
        <div class="sep"></div>
        <div class="flex py-4 px-4 md:px-12 lg:px-36 w-full items-center">
            <div class="fl-1 flex h-16 xl:h-24">
                <a class="h-full" rel="canonical" href="{{ route('home') }}"><img class="h-full" src="{{ asset('assets/png/logo.png') }}" alt=""></a>
            </div>
            <div class="nav-section fl-1 flex items-center flex-row-reverse">
                @guest

                    <a href="{{ route('login') }}">
                        <div class="ml-4 text-sm  font-bold bg-chillBlue hover:bg-blueGray-dark transition-colors px-5 py-1 rounded-2xl text-white">
                            Login
                        </div>
                    </a>
                    <a href="{{ route('signup') }}">
                        <div class="item">Sign Up</div>
                    </a>
                @endguest
                @auth
                        <button class="group relative text-sm border-0 cursor-pointer font-bold bg-chillBlue hover:bg-blueGray-dark transition-colors px-6 pl-12 py-1 rounded-2xl text-white">
                            <div class="overflow-hidden absolute left-0 top-1/2 transform -translate-y-1/2 p-1 bg-chillBlue h-11 w-11 rounded-full group-hover:bg-blueGray-dark transition-colors">
                                <img class="object-cover w-full h-full rounded-full" src="{{ asset('storage/images/'.Auth::user()->image) }}" alt="">
                            </div>
                            <div class="fas fa-caret-down absolute right-3 top-1/2 transform -translate-y-1/2"></div>

                            <div class="group text-gray-600 hidden overflow-hidden hover:block group-focus:block
                                        text-left font-normal text-base absolute top-full w-56 border-b-8 mt-4
                                        border-solid border-0 border-chillBlue z-10 bg-white px-6 py-6
                                        left-1/2 transform -translate-x-1/2 ">
                                <div class="hover:text-black mb-1"><a href="{{ route('profile-about',Auth::user()->id) }}"> View Profile </a></div>
                                <div class="hover:text-black mb-1"><a href="{{ route('edit-profile') }}">Settings</a></div>
                                <div class="hover:text-black mb-1"><a href="{{ route('logout') }}"> Logout </a></div>
                            </div>
                            {{ explode(' ', Auth::user()->name)[0] }}
                        </button>
                    
                @endauth 
                <style>
                    .dropdown-menu:hover .menu-content {
                       display: block;
                    }
                    
                    .dropdown-menu:hover .menu-content {
                       display: block;
                    }
                    .dropdown-menu:hover .menu-btn {
                       background-color: none;
                    }
                    </style>

                @if(isset($navSections))
                @foreach ($navSections as $navSection)
                    <div class="dropdown-menu relative">
                        <a href="">
                            <div class="mx-4 item font-bold menu-btn">{{ strtoupper($navSection->name) }}</div>
                        </a>
                        <div class="menu-content shadow hidden absolute w-40 bg-white">
                            @foreach ($navSection->page as $item)
                            <a class="links-hidden hover:bg-chillBlue-lightest px-2 py-2 m-0 text-gray-600 font-bold block transition-all text-center" style="margin: 0" href="{{ route('view-page',[$navSection->name,$item->id]) }}">{{$item->page_name}}</a>
                            @endforeach
                        </div>
                    </div>
                @endforeach
                @endif

            </div>
        </div>
        @auth
            @if(!Auth::user()->hasVerifiedEmail())
                @if(Session::has('verification_message'))
                <div class="absolute top-full -mt-4 w-full bg-green-100 border-b border-geen-500 border-solid border-0 px-36 py-4">
                    A verification link has been sent to your email account.
                </div>
                @else
                <div class="absolute top-full -mt-4 w-full bg-yellow-100 border-b border-yellow-500 border-solid border-0 px-36 py-4">
                    Please verify your email address to use the full account features. 
                    <form class="inline" action="{{ route('verification.send') }}" method="POST"> @csrf <button class="underline bg-opacity-0 bg-yellow-100 cursor-pointer bg-transparent border-0 outline-none">Send Verification Link</button></form> 
                </div>
                @endif
            @endif
        @endauth
    </div>
    @yield('contents-outside-wrapper')
    <div class="md:wrapper pt-4 md:px-12 lg:px-36">
        
        @yield('contents')

    </div>
    <div id="footer" class="overflow-hidden w-full  relative mt-8 rounded-t-3xl box-content">
        <div class="f flex flex-wrap justify-between px-24 py-12">
            <div class="logo fl-1 mb-2 w-full pr-12">
                <a rel="canonical" href="/">
                    <img src="{{ asset('assets/png/logo_grey.png') }}" class="w-96">
                </a>
                <div class="content mt-8 text-white text-justify">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Inventore, exercitationem? Ut adipisci reprehenderit?
                </div>
                <div class="contact-heading">
                    <b>CONTACT US</b>
                    <p>El Maadi Branch : 010 224 555 01</p>
                    <p>Mohandseen Branch : 010 224 555 02</p>
                    <p>El Tagamo’ Branch : 010 224 555 05</p>
                </div>
                <div class="contact-icons mt-12">
                    <div class="contact-icon mb-3 flex ai-c">
                        <div class="icon-data">
                            <i class="fas fa-phone-alt"></i>
                        </div>
                        <div class="icon-content">
                            Academy: 002 010 224 555 03
                        </div>
                    </div>
                    <div class="contact-icon mb-3 flex ai-c">
                        <div class="icon-data">
                            <i class="fas fa-at"></i>
                        </div>
                        <div class="icon-content">
                            info@osteoegypt.org
                        </div>
                    </div>
                    <div class="contact-icon flex ai-c">
                        <div class="icon-data">
                            <i class="fas fa-building"></i>
                        </div>
                        <div class="icon-content">
                            6th floor , 12th flat, 5 Lebanon st, Al Mohandseen, Giza Governorate, Egypt
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-2/4 ">
                <div class="links flex w-full justify-center">
                    <div class="col w-full">
                        <ul>
                            <li class="mb-8 list-none font-bold"><a class="text-gray-100" href=''>CLINIC</a></li>
                            <li class="mb-8 list-none font-bold"><a class="text-gray-100" href=''>OSTEOEGYPT</a></li>
                            <li class="mb-8 list-none font-bold"><a class="text-gray-100" href=''>EDUCATION</a></li>
                            <li class="mb-8 list-none font-bold"><a class="text-gray-100" href=''>FIND OSTEOPATH</a></li>
                            <li class="mb-8 list-none font-bold"><a class="text-gray-100" href=''>OSTEOPATHY</a></li>
                            <li class="mb-8 list-none font-bold"><a class="text-gray-100" href=''>RESEARCH</a></li>
                            <li class="mb-8 list-none font-bold"><a class="text-gray-100" href='{{ route('about') }}'>ABOUT US</a></li>
                        </ul>
                    </div>
                    <div class="col w-full">
                        <ul>
                            <li class="mb-8 list-none font-bold"><a class="text-gray-100" href=''>HOW OSTEOPATHY WORKS?</a></li>
                            <li class="mb-8 list-none font-bold"><a class="text-gray-100" href=''>OUR DOCTORS</a></li>
                            <li class="mb-8 list-none font-bold"><a class="text-gray-100" href="">MEDICAL SERVICES</a></li>
                            <li class="mb-8 list-none font-bold"><a class="text-gray-100" href="">FAQ</a></li>
                            <li class="mb-8 list-none font-bold"><a class="text-gray-100" href="">REQUEST AN APPOINTMENT</a></li>
                            <li class="mb-8 list-none font-bold"><a class="text-gray-100" href="{{ route('contact') }}">CONTACT US</a></li>
                            <li class="mb-8 list-none font-bold"><a class="text-gray-100" href="{{ route('terms') }}">TERMS</a></li>
                        </ul>
                    </div>
                </div>
                <label class="search-label" for="name">
                    <i class="fas fa-search icon"></i>
                    <input class="search-input" type="text" name="fullname" id="name" placeholder=" SEARCH WEBSITE HERE ..." required />
                </label>
            </div>
        </div>

        <div class="footer-end h-12 pr-16 pb-24 pt-12 ">
            @if(isset($linkss->facebook))
                <div class="social flex float-right">
                    <a class="w-20 h-20" href="{{ $linkss->facebook }}"><i class="fab fa-facebook-f text-4xl w-16 h-16 bg-white rounded-full p-3 text-center"></i></a>
                    <a class="w-20 h-20" href="{{ $linkss->instagram }}"><i class="fab fa-instagram text-5xl w-16 h-16 bg-white rounded-full p-2 text-center"></i></a>
                    <a class="w-20 h-20" href="{{ $linkss->linkedin }}"><i class="fab fa-linkedin-in text-4xl w-16 h-16 bg-white rounded-full p-3 text-center"></i></a>
                    <a class="w-20 h-20" href="{{ $linkss->twitter }}"><i class="fab fa-twitter text-4xl w-16 h-16 bg-white rounded-full p-3 text-center"></i></a>
                    <a class="w-20 h-20" href="{{ $linkss->youtube }}"><i class="fab fa-youtube text-4xl w-16 h-16 bg-white rounded-full p-3 text-center"></i></a>
                </div>
            @endif
        </div>
    </div>
</body>

</html>
