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
                padding:8px 10px;
                float:right;
            }
            #sidenav-t {
                background: #e2e8f0;
                margin:0 8px;
            }

            #sidenav-t .menu-items-about {
                padding: 10px 9px 6px 17px;
                text-decoration: none;
                font-size: 21px;
                color: rgba(255,255,255,var(--bg-opacity));
                display: block;
                border:1px solid #ced5de;
            }

            #sidenav-t .menu-items-about:hover {
                color: #064579;
            }

            .about-us-h1s{
                font-size:28px;
            }

            .about-us-h2s{
                font-size:22px;
            }

            .about-us-ps{
                font-size:16px;
            }
           

    </style>
    <div id="about-us-main-container">

        <div id="sidenav-t">
            <a href="#aboutUs" class="menu-items-about">About Us</a>
            <a href="#ourTeam" class="menu-items-about">Our Team</a>
            <a href="#education" class="menu-items-about">Education</a>
            <a href="#contactUs" class="menu-items-about">Contact Us</a>
            <a href="#lifeAt" class="menu-items-about">Life At OsteoEgypt</a>
            <a href="#careers" class="menu-items-about">Careers</a>
        </div>

        <div id="about-us-content">
            <h1 class="about-us-h1s">About Us</h1><br>
            <h2 class="about-us-h2s">Our Vision</h2><br>
            <p class="about-us-ps">1. Promote and encourage those pursuing medical careers to become certified in osteopathic medicine. This includes providing available educational institutions to support this movement.<br>
            2. Promote and encourage current DO’s to practice osteopathy in its true form. In many areas, such as the U.S., only 3-5% of DO’s actually practice osteopathic manual skills on a regular basis.<br>
            3. Promote and encourage Physical therapist to join in with supporting and promoting awareness of osteopathy by either continuing their education to become DO’s, or working together and “complimenting” DO’s by adopting the osteopathic philosophy within the scope of PT practice.<br>
            </p>
        </div>

    </div>
@endsection()