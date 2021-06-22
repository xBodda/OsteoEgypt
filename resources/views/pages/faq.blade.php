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
<<<<<<< HEAD
        <div class="question flex flex-col p-1  bg-white p-4 pl-0.5 mb-4 border border-solid border-1 border-gray-300">
            <div class="flex flex-row ">
                <button class="b fas fa-plus-circle fa-lg w-1/12 border-none bg-white text-chillBlue" ></button>
                <h2>Is OsteoPathic treatment Safe?</h2>
            </div>
                <p class="answer p-2 ml-8 border-none  hidden text-gray-400">Osteopathy has one of the best safety records of any medically related professions. It respects responses from the body during and after treatment, and adjusts accordingly. Osteopaths are highly trained to recognize any condition where treatments may not be recommended and referral to other medical professional is made, whenever needed.

                    Osteopaths will choose techniques that are suitable of each individual patient, and safety is always the prime consideration.</p>
        </div>
        <div class="question flex flex-col p-1  bg-white p-4 pl-0.5 mb-4 border border-solid border-1 border-gray-300">
            <div class="flex flex-row ">
                <button class="b fas fa-plus-circle fa-lg w-1/12 border-none bg-white text-chillBlue" ></button>
                <h2>What can i expect at an appointment?</h2>
            </div>
                <p class="answer p-2 ml-8 border-none  hidden text-gray-400">When you arrive at the Osteo Egypt, the staff will greet you and seat you at the waiting room. We will examine you as quick as possible – average waiting time is 15 minutes.</p>
        </div>
        <div class="question flex flex-col p-1  bg-white p-4 pl-0.5 mb-4 border border-solid border-1 border-gray-300">
            <div class="flex flex-row ">
                <button class="b fas fa-plus-circle fa-lg w-1/12 border-none bg-white text-chillBlue" ></button>
                <h2>How can an OsteoPath detect the problem area?</h2>
            </div>
                <p class="answer p-2 ml-8 border-none  hidden text-gray-400">In the same way your medical doctor uses her/his palpatory skills to examine various parts of your body, an Osteopath uses specialized, highly trained palpatory skills to feel for the tensions, and possible restrictions of the tissues. As your body is made up of a great amount of water, your Osteopath, by applying various gentle pressures to different depths, is able to recognize the feel of well-functioning and malfunctioning organ.
                    “Osteopathy is all in Anatomy and its governing laws…” Andrew Taylor Still, medical doctor and surgeon, the founder of the Osteopathy as a science, at the end of the 19th century.</p>
        </div>
        <div class="question flex flex-col p-1  bg-white p-4 pl-0.5 mb-4 border border-solid border-1 border-gray-300">
            <div class="flex flex-row ">
                <button class="b fas fa-plus-circle fa-lg w-1/12 border-none bg-white text-chillBlue" ></button>
                <h2>Is OsteoPathy working with the bones?</h2>
            </div>
                <p class="answer p-2 ml-8 border-none  hidden text-gray-400">Yes… but not exactly. The word Osteopath comes from 2 root words: osteo and path(os). We commonly use the root osteo to talk about bone (as in osteoporosis) however literally translated the root osteo refers to the structure of a living thing – In terms of osteopathy this may mean the bones, or the position and structure of an organ, or a nerve or blood vessel etc. and more importantly how this intricate structure lends to the proper functioning of the body. The root path or pathos is commonly used to describe the disease process (as in pathology – the study of disease). However, the ancient Greek word pathos was used to describe an actors ability to portray an emotion or feeling to an audience. Therefore an Osteopath is someone who treats, through the structure, that which the body is trying to portray or show.</p>
        </div>
        <div class="question flex flex-col p-1  bg-white p-4 pl-0.5 mb-4 border border-solid border-1 border-gray-300">
            <div class="flex flex-row ">
                <button class="b fas fa-plus-circle fa-lg w-1/12 border-none bg-white text-chillBlue" ></button>
                <h2>Why choose an Osteopath?</h2>
            </div>
                <p class="answer p-2 ml-8 border-none  hidden text-gray-400">Millions of patients today are turning to Osteopaths as their physicians of choice. They recognize that a DO, doctor of osteopathy, offers a variety of non invasive healing treatments not available from allopathic (conventional) doctors.
                    Long before it was fashionable, DOs advised their patients that the “best drugs” are contained in the body’s immune system. So strongly do Osteopaths believe in the body’s innate healing ability that many have devoted years of additional training, after medical school, to specialize in Osteopathic Manual Medicine (OMM).</p>
=======
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

        <div class="question flex flex-col rounded-lg bg-white p-4 pl-0.5 mb-4 shadow ">
            <div class="flex flex-row ">
                <button class="b fa-lg w-1/12 border-none bg-white text-chillBlue" ><i class="fas fa-plus-circle iconn"></i></button>
                <h2 class="text-gray-400 ">Is OsteoPathic treatment Safe?</h2>
            </div>
            <div class="faq_answer_container">
                <div class="faq-answer">
                    <p class="answer p-2 ml-8 border-none rounded-lg h-0 text-gray-400">Osteopathy has one of the best safety records of any medically related professions. It respects responses from the body during and after treatment, and adjusts accordingly. Osteopaths are highly trained to recognize any condition where treatments may not be recommended and referral to other medical professional is made, whenever needed.Osteopaths will choose techniques that are suitable of each individual patient, and safety is always the prime consideration.</p>
                </div>
                
            </div>
                
        </div>

        <div class="question flex flex-col rounded-lg bg-white p-4 pl-0.5 mb-4 shadow ">
            <div class="flex flex-row ">
                <button class="b fa-lg w-1/12 border-none bg-white text-chillBlue" ><i class="fas fa-plus-circle iconn"></i></button>
                <h2 class="text-gray-400 ">Is OsteoPathic treatment Safe?</h2>
            </div>
            <div class="faq_answer_container">
                <div class="faq-answer">
                    <p class="answer p-2 ml-8 border-none rounded-lg h-0 text-gray-400">Osteopathy has one of the best safety records of any medically related professions. It respects responses from the body during and after treatment, and adjusts accordingly. Osteopaths are highly trained to recognize any condition where treatments may not be recommended and referral to other medical professional is made, whenever needed.Osteopaths will choose techniques that are suitable of each individual patient, and safety is always the prime consideration.</p>
                </div>
                
            </div>
                
>>>>>>> 49524260a9be55dcaa6d9041a80ed0f03242539f
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