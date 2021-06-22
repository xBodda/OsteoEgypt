@extends('layouts.app')

@section('title')
    FAQ
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
        <div class="question flex flex-col rounded-lg bg-white p-4 pl-0.5 mb-4 shadow ">
            <div class="flex flex-row ">
                <button class="b fa-lg w-1/12 border-none bg-white text-chillBlue cursor-pointer" ><i class="fas fa-plus-circle iconn"></i></button>
                <h2 class="text-gray-400 ">Is OsteoPathic treatment Safe?</h2>
            </div>
            <div class="faq_answer_container">
                <div class="faq-answer h-0  overflow-hidden">
                    <p class="answer ml-8 border-none rounded-lg text-gray-400">Osteopathy has one of the best safety records of any medically related professions. It respects responses from the body during and after treatment, and adjusts accordingly. Osteopaths are highly trained to recognize any condition where treatments may not be recommended and referral to other medical professional is made, whenever needed.Osteopaths will choose techniques that are suitable of each individual patient, and safety is always the prime consideration.</p>
                </div>
                
            </div>
                
        </div>

    </div>
</div>
    <script>
        $(document).ready(function() {

            $('.b').click(function() 
            {
                if ($(this).parent().parent().is('.open'))
                {
                    $(this).children('.iconn').addClass('fa-plus-circle');
                    $(this).children('.iconn').removeClass('fa-minus-circle');
                    
                    $(this).parent().parent().find('.faq-answer').animate({'height':'0'},500);
                    $(this).closest('.question').removeClass('open');
                }
                else
                {
                    var newHeight =$(this).parent().parent().find('.answer').height() +'px';
                    console.log(newHeight);
                    $(this).parent().parent().find('.faq-answer').animate({'height':newHeight},500);
                    // $(this).closest('.question').find('.faq_answer_container').animate({'height':newHeight},500);
                    $(this).closest('.question').addClass('open');
                    $(this).children('.iconn').addClass('fa-minus-circle');
                    $(this).children('.iconn').removeClass('fa-plus-circle');
                }
            });

            });

    </script>
@endsection()