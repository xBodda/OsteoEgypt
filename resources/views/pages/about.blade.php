@extends('layouts.app')

@section('title')
    About
@endsection

@section('contents')
    <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
            #about-us-main-container{
                display:flex;
                width:100%;
            }
            #about-us-content{
                flex:2;
                display: block;
                padding:0 15px;
                float:right;
            }
            .sidebars-about-us{
                display:flex;
                flex-direction:column;
                width:20%;
                font-weight:bold;

            }
            .current-item-about-us{
                color: #ffffff;
                background-color: var(--heading);
            }
            #sidenav-t {
                margin-bottom:30px;
                width:100%;
                padding-right:15px;
            }
            #sidenav-te{
                width:100%;
                padding-right:15px;
            }
            #sidenav-te .menu-items-about {
                box-shadow:0.1px 0.1px 2px #0D3953;
                padding: 15px;
                text-decoration: none;
                font-size: 19px;
                color: rgba(255,255,255,var(--bg-opacity));
                display: block;
            }

            #sidenav-te .menu-items-about:hover {
                color: #ffffff;
                background-color: var(--heading);

            }
            #sidenav-t .menu-items-about {
                box-shadow:0.1px 0.1px 2px #0D3953;
                padding: 15px;
                text-decoration: none;
                font-size: 19px;
                color: rgba(255,255,255,var(--bg-opacity));
                display: block;
            }
            
            #sidenav-t .menu-items-about:hover {
                color: #ffffff;
                background-color: var(--heading);

            }

            .about-us-h1s{
                font-size:35px;
                font-weight:bold;
                margin-bottom:10px;
            }

            .about-us-h2s{
                font-size:25px;
                font-weight:bold;
                margin-bottom:10px;

            }

            .about-us-ps{
                font-size:17px;
                margin-bottom:25px;

            }
           
            .what-is-container{
                display:flex;
            }

            .about-us-single-img{
                width:150%;
                height:auto;
            }
            .about-us-ps .about-us-what-para{
                width:100%;
                height:auto;
                text-align:left;
            }
            .gallery-about-us {
            border: 1px solid rgba(0, 0, 0, 0.08), 0 2px 4px 0;
            float: left;
            width: 600px;
            }

            .gallery-about-us img {
            width: 100%;
            height: auto;
            }

    </style>
    <div id="about-us-main-container">
        <div class="sidebars-about-us">
                <div id="sidenav-t">
                    <a href="#aboutUs" class="menu-items-about current-item-about-us">About Us</a>
                    <a href="#ourTeam" class="menu-items-about">Our Team</a>
                    <a href="#education" class="menu-items-about">Education</a>
                    <a href="#contactUs" class="menu-items-about">Contact Us</a>
                    <a href="#lifeAt" class="menu-items-about">Life At OsteoEgypt</a>
                    <a href="#careers" class="menu-items-about">Careers</a>
                </div>
                <div id="sidenav-te">
                    <a href="#faq" class="menu-items-about">FAQ</a>
                    <a href="#terms" class="menu-items-about">Terms & Conditions</a>
                    <a href="#privacypolicy" class="menu-items-about">Privacy Policy</a>
                </div>
        </div>
        <div id="about-us-content">
            <h1 class="about-us-h1s">About Us</h1>
            <p class="about-us-ps">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
            <h2 class="about-us-h2s">What is OsteoPathy</h2>
            <div class="what-is-container">
                

                <p class="about-us-ps about-us-what-para">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
                <a  href="{{ asset('assets/png/aboutus1.png') }}" class="about-us-single-img">
                        <img src="{{ asset('assets/png/aboutus1.png') }}" alt="OsteoPathy" class="about-us-single-img">
                </a>
            </div>
            <h2 class="about-us-h2s">Our Vision</h2>
            <p class="about-us-ps">1. Promote and encourage those pursuing medical careers to become certified in osteopathic medicine. This includes providing available educational institutions to support this movement.<br>
            2. Promote and encourage current DO’s to practice osteopathy in its true form. In many areas, such as the U.S., only 3-5% of DO’s actually practice osteopathic manual skills on a regular basis.<br>
            3. Promote and encourage Physical therapist to join in with supporting and promoting awareness of osteopathy by either continuing their education to become DO’s, or working together and “complimenting” DO’s by adopting the osteopathic philosophy within the scope of PT practice.<br>
            </p>
            <h2 class="about-us-h2s">Our Mission</h2>
            <p class="about-us-ps">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>

            <h2 class="about-us-h2s">Accreditation's</h2>
            <p class="about-us-ps">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>

            <h2 class="about-us-h2s">Our Gallery</h2>
            <div class="gallery-about-us">
                <a  href="{{ asset('assets/png/aboutus2.png') }}">
                    <img src="{{ asset('assets/png/aboutus2.png') }}" alt="OsteoPathy">
                </a>
            </div>
            <div class="gallery-about-us">
                <a  href="{{ asset('assets/png/aboutus3.png') }}">
                    <img src="{{ asset('assets/png/aboutus3.png') }}" alt="OsteoPathy">
                </a>
            </div>
            <div class="gallery-about-us">
                <a  href="{{ asset('assets/png/aboutus4.png') }}">
                    <img src="{{ asset('assets/png/aboutus4.png') }}" alt="OsteoPathy">
                </a>
            </div>
            <div class="gallery-about-us">
                <a  href="{{ asset('assets/png/aboutus5.png') }}">
                    <img src="{{ asset('assets/png/aboutus5.png') }}" alt="OsteoPathy">
                </a>
            </div>
            <div class="gallery-about-us">
                <a  href="{{ asset('assets/png/aboutus6.png') }}">
                    <img src="{{ asset('assets/png/aboutus6.png') }}" alt="OsteoPathy">
                </a>
            </div>
            <div class="gallery-about-us">
                <a  href="{{ asset('assets/png/aboutus7.png') }}">
                    <img src="{{ asset('assets/png/aboutus7.png') }}" alt="OsteoPathy">
                </a>
            </div>
        </div>

    </div>
@endsection()