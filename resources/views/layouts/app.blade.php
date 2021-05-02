<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Link to the Icons -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@200;300;400;500;700;800;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,wght@0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="{{ asset('assets/css/master.css') }}" rel="stylesheet">
    <script defer src="{{ asset('assets/js/app.js') }}"></script>
    <title>@yield('title') | OsteoEgypt</title>
</head>

<body>
    <div class="header">
        <div class="first-header flex">
            <div class="about-section fl-1 flex">
                <a href="">
                    <div class="item">FAQ</div>
                </a>
                <a href="">
                    <div class="item">REQUEST AN APPOINTMENT</div>
                </a>
                <a href="">
                    <div class="item">CONTACT US</div>
                </a>
            </div>
            {{-- callto:, while supported by Skype, is not a standard and should be avoided unless specifically targeting Skype users. --}}
            <div class="call-section fl-1 flex">
                <p><a href="tel:+201158999135"><i class="fas fa-phone-alt"></i>
                    Call Us (+20) 11 5899 9135</a></p>
            </div>
        </div>
        <div class="sep"></div>
        <div class="second-header flex">
            <div class="logo fl-1 flex">
                <img src="{{ asset('assets/png/logo.png') }}" alt="">
            </div>
            <div class="nav-section fl-1 flex">

                <a href="">
                    <div class="item">EN</div>
                </a>
                <a href="">
                    <div class="item">RESEARCH</div>
                </a>
                <a href="">
                    <div class="item">OSTEOPATHY</div>
                </a>
                <a href="">
                    <div class="item">FIND OSTEOPATH</div>
                </a>
                <a href="">
                    <div class="item">EDUCATION</div>
                </a>
                <a href="">
                    <div class="item">OSTEOEGYPT</div>
                </a>
                <a href="">
                    <div class="item">CLINIC</div>
                </a>

            </div>
        </div>
    </div>
    <div class="wrapper">
        @yield('contents')
    </div>
    <div id="footer">
        <div class="f flex">
            <div class="logo fl-1">
                <a rel="canonical" href="/">
                    <img src="{{ asset('assets/png/logo_grey.png') }}">
                </a>
                <div class="content">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Inventore, exercitationem? Ut adipisci reprehenderit?
                </div>
                <div class="contact-heading">
                    <b>CONTACT US</b>
                    <p>El Maadi Branch : 010 224 555 01</p>
                    <p>Mohandseen Branch : 010 224 555 02</p>
                    <p>El Tagamo’ Branch : 010 224 555 05</p>
                </div>
                <div class="contact-icons mt-30">
                    <div class="contact-icon mb-10 flex ai-c">
                        <div class="icon-data">
                            <i class="fas fa-phone-alt"></i>
                        </div>
                        <div class="icon-content">
                            Academy: 002 010 224 555 03
                        </div>
                    </div>
                    <div class="contact-icon mb-10 flex ai-c">
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
            <div class="">
                <div class="links flex">
                    <div class="col">
                        <ul>
                            <li><a href=''>CLINIC</a></li>
                            <li><a href=''>OSTEOEGYPT</a></li>
                            <li><a href=''>EDUCATION</a></li>
                            <li><a href=''>FIND OSTEOPATH</a></li>
                            <li><a href=''>OSTEOPATHY</a></li>
                            <li><a href=''>RESEARCH</a></li>
                        </ul>
                    </div>
                    <div class="col">
                        <ul>
                            <li><a href=''>HOW OSTEOPATHY WORKS?</a></li>
                            <li><a href=''>OUR DOCTORS</a></li>
                            <li><a href="">MEDICAL SERVICES</a></li>
                            <li><a href="">FAQ</a></li>
                            <li><a href="">REQUEST AN APPOINTMENT</a></li>
                            <li><a href="">CONTACT US</a></li>
                        </ul>
                    </div>
                </div>
                <label class="search-label" for="name">
                    <i class="fas fa-search icon"></i>
                    <input class="search-input" type="text" name="fullname" id="name" placeholder=" SEARCH WEBSITE HERE ..." required />
                </label>
            </div>
        </div>

        <div class="footer-end">
            <div class="social">
                <a href=""><i class="fab fa-facebook-f"></i></a>
                <a href=""><i class="fab fa-instagram"></i></a>
                <a href=""><i class="fab fa-linkedin-in"></i></a>
                <a href=""><i class="fab fa-twitter"></i></a>
                <a href=""><i class="fab fa-youtube"></i></a>
            </div>
        </div>
    </div>
</body>

</html>
