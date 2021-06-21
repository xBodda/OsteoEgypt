@extends('layouts.app')

@section('title')
    faq
@endsection

@section('contents')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <div id="about-us-main-container">
        <div class="sidebars-about-us">
                <div id="sidenav-t" class="mb-4">
                    <a href="#aboutUs" class="menu-items-about ">About Us</a>
                    <a href="#ourTeam" class="menu-items-about">Our Team</a>
                    <a href="#education" class="menu-items-about">Education</a>
                    <a href="#contactUs" class="menu-items-about">Contact Us</a>
                    <a href="#lifeAt" class="menu-items-about">Life At OsteoEgypt</a>
                    <a href="#careers" class="menu-items-about">Careers</a>
                </div>
                <div id="sidenav-te">
                    <a href="#faq" class="menu-items-about current-item-about-us">FAQ</a>
                    <a href="#terms" class="menu-items-about">Terms & Conditions</a>
                    <a href="#privacypolicy" class="menu-items-about">Privacy Policy</a>
                </div>
        </div>
<div class="flex flex-col border-solid border-black w-3/4">
        <div class="m-4">
        <h1 class="">FAQ</h1>
        </div>
        <div class="questionsSection m-2">
                <button class="question bg-blue-600">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Suscipit quo omnis non veritatis praesentium. Laborum in possimus excepturi quae deleniti sed minima velit rem architecto quas. Laudantium ducimus vitae dolorum.</button>
                <p class="answer bg-green-200">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatem nobis ex facere neque ab molestias fugit atque, cum id animi debitis velit tempore et illum repellendus iusto minima consectetur error.</p>
        </div>
    </div>
</div>
    <script>
        $(document).ready(function() {
                $(".question").click(function(){
                $(".answer").toggle();
                });
        });
          
     </script>
@endsection()