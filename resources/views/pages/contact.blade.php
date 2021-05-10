@extends('layouts.app')

@section('title')
    Contact Us
@endsection

@section('contents')

<div class="contact-container flex">
    <div class="contact-form fl-1">
        <div class="heading">
            <h1>Contact us</h1>
        </div>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Earum, doloremque.</p>
        <form action="{{url('/sendMessage')}}" method="POST">
            {{csrf_field()}}
            <div class="error">
                <div class="flex">
                    <label for="name">Fullname <b class="req">*</b></label>
                    <p></p>
                </div>
                <input class="input" type="text" name="fullname" value="" placeholder="Your first name..." required>
            </div>
            <div class="error">
                <div class="flex">
                    <label for="name">Email Address <b class="req">*</b></label>
                    <p></p>
                </div>
                <input class="input" type="text" name="email" value="" placeholder="Your Email address..." required>
            </div>
            <div class="error">
                <div class="flex">
                    <label for="name">Mobile Number <b class="req">*</b></label>
                    <p></p>
                </div>
                <div class="flex">
                    <select name="countrycode" id="countrycode" class="input" oninput="changeFlag(this)" required>
                        <option value="eg" selected>+20</option>
                        @foreach ($countries as $country)
                            <option value="{{$country->iso}}">+{{$country->phonecode}}</option>
                        @endforeach
                    </select>
                    <label for="" class="contact-label">
                        <input class="input rowInput" type="text" id="phonenumber" name="phonenumber" value="" placeholder="Your phone number..." disabled>
                    </label>
                    <div class="input viewInput">
                        <img id="phoneFlag" title="EG" src="{{ asset('assets/svg/flag/eg.svg') }}" width="40px" alt="phoneFlag">
                    </div>
                </div>
            </div>
            <div class="error">
                <div class="flex">
                    <label for="name">Your Message <b class="req">*</b></label>
                    <p></p>
                </div>
                <textarea name="message" id="message" cols="30" rows="6" class="input" placeholder="Tell us what you want..." required></textarea>
            </div>
            <div class="submit-button-container">
                <input type="submit" class="submit-button" value="Send">
            </div>
        </form>
    </div>
    <div class="contact-address fl-1">
        <div class="contact-img">
            <img src="{{ asset('assets/png/logo_grey.png') }}" alt="image">
        </div>
        <div class="contact-addresses">
            <div class="address mb-30 mt-10">
                <h3>MOHANDSEEN CLINIC</h3>
                <p>+2 01022455502</p>
                <p>6th floor , 12th flat, 5 Lebnan st, Al Mohandseen, Giza Governorate, Egypt</p>
            </div>
            <div class="address mb-30">
                <h3>MAADI CLINIC</h3>
                <p>+2 01022455501</p>
                <p>OsteoEgypt, 106 Flat 1st Floor ( Above Costa Coffee), 73 Rd. 9, Maadi, Cairo, Egypt.</p>
            </div>
            <div class="address mb-30">
                <h3>EL TAGAMO’ CLINIC</h3>
                <p>+2 01022455505</p>
                <p>OsteoEgypt, 225 Second floor, Medical Park Premier, First new Cairo, Egypt.</p>
            </div>
        </div>
        <div class="appointment-btn mt-30">
            <div class="submit-button-container alted mt-30">
                <input type="submit" class="submit-button alted" value="Schedule An Appointment">
            </div>
        </div>
    </div>
</div>
<script>
    function changeFlag(x)
    {
        var img = document.getElementById('phoneFlag');
        var input = document.getElementById('phonenumber');
        input.disabled = false;
        input.style.cursor = 'auto'
        var text=x.options[x.selectedIndex].text;
        input.value = text;
        img.title = x.value;
        var path = x.value;
        path = path.toLowerCase();
        newPath = "{{asset('')}}assets/svg/flag/"+path+".svg";
        img.src = newPath;
    }
</script>

@endsection
