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
<div class="flex flex-col w-3/4">
        <div class="m-2">
        <h1 class="mb-4 text-chillBlue">Frequently Asked Questions</h1>
        </div>
        <div class="question1 flex flex-col p-1 rounded-lg bg-white p-4 pl-0.5 mb-4">
            <div class="flex flex-row ">
                <button class="b1 fas fa-plus-circle fa-lg w-1/12 border-none bg-white text-chillBlue" ></button>
                <h2 class="text-gray-400 ">What Is OsteoPathy?</h2>
            </div>
                <p class="answer1 p-2 ml-8 border-none rounded-lg hidden text-gray-400">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatem nobis ex facere neque ab molestias fugit atque, cum id animi debitis velit tempore et illum repellendus iusto minima consectetur error.</p>
        </div>
        <div class="question2 flex flex-col p-1 rounded-lg bg-white p-4 pl-0.5 mb-4">
            <div class="flex flex-row ">
                <button class="b2 fas fa-plus-circle fa-lg w-1/12 border-none bg-white text-chillBlue" ></button>
                <h2 class="text-gray-400 ">What Is OsteoPathy?</h2>
            </div>
                <p class="answer2 p-2 ml-8 border-none rounded-lg hidden text-gray-400">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatem nobis ex facere neque ab molestias fugit atque, cum id animi debitis velit tempore et illum repellendus iusto minima consectetur error.</p>
        </div>
        <div class="question3 flex flex-col p-1 rounded-lg bg-white p-4 pl-0.5 mb-4">
            <div class="flex flex-row ">
                <button class="b3 fas fa-plus-circle fa-lg w-1/12 border-none bg-white text-chillBlue" ></button>
                <h2 class="text-gray-400 ">What Is OsteoPathy?</h2>
            </div>
                <p class="answer3 p-2 ml-8 border-none rounded-lg hidden text-gray-400">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatem nobis ex facere neque ab molestias fugit atque, cum id animi debitis velit tempore et illum repellendus iusto minima consectetur error.</p>
        </div>
        <div class="question4 flex flex-col p-1 rounded-lg bg-white p-4 pl-0.5 mb-4">
            <div class="flex flex-row ">
                <button class="b4 fas fa-plus-circle fa-lg w-1/12 border-none bg-white text-chillBlue" ></button>
                <h2 class="text-gray-400 ">What Is OsteoPathy?</h2>
            </div>
                <p class="answer4 p-2 ml-8 border-none rounded-lg hidden text-gray-400">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatem nobis ex facere neque ab molestias fugit atque, cum id animi debitis velit tempore et illum repellendus iusto minima consectetur error.</p>
        </div>
        <div class="question5 flex flex-col p-1 rounded-lg bg-white p-4 pl-0.5 mb-4">
            <div class="flex flex-row ">
                <button class="b5 fas fa-plus-circle fa-lg w-1/12 border-none bg-white text-chillBlue" ></button>
                <h2 class="text-gray-400 ">What Is OsteoPathy?</h2>
            </div>
                <p class="answer5 p-2 ml-8 border-none rounded-lg hidden text-gray-400">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatem nobis ex facere neque ab molestias fugit atque, cum id animi debitis velit tempore et illum repellendus iusto minima consectetur error.</p>
        </div>
    </div>
</div>
    <script>
        $(document).ready(function() {
                    $(".question1").click(function(){
                    $(".answer1").slideToggle();
                    });
                     $('.question1').click(function() {
                          $('.b1').toggleClass('fas fa-plus-circle fas fa-minus-circle');
                     });
            });

            $(document).ready(function() {
                    $(".question2").click(function(){
                    $(".answer2").slideToggle();
                    });
                    $('.question2').click(function() {
                          $('.b2').toggleClass('fas fa-plus-circle fas fa-minus-circle');
                     });

            });
            $(document).ready(function() {
                    $(".question3").click(function(){
                    $(".answer3").slideToggle();
                    });
                    $('.question3').click(function() {
                          $('.b3').toggleClass('fas fa-plus-circle fas fa-minus-circle');
                     });

            });
            $(document).ready(function() {
                    $(".question4").click(function(){
                    $(".answer4").slideToggle();
                    });
                    $('.question4').click(function() {
                          $('.b4').toggleClass('fas fa-plus-circle fas fa-minus-circle');
                     });

            });
            $(document).ready(function() {
                    $(".question5").click(function(){
                    $(".answer5").slideToggle();
                    });
                    $('.question5').click(function() {
                          $('.b5').toggleClass('fas fa-plus-circle fas fa-minus-circle');
                     });

            });

    </script>
@endsection()