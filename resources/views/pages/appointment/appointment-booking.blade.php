@extends('layouts.app')


@section('title')
    Appointment Booking
@endsection


@section('contents')

<div id="appointment_booking_page" class="contact-container flex">
    <div class="contact-form fl-1">
        <div class="heading">
            <h1>Schedule An Appointment</h1>
        </div>
        @if($errors->any())
            {!! implode('', $errors->all('<div class="text-red-500">:message</div>')) !!}
        @endif
        @if(Session::has('success'))
            <div class="w-full bg-green-200 text-green-700 rounded px-6 py-4 text-md">
                {{Session::get('success')}}
            </div>
        @endif
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Earum, doloremque.</p>
        <form action="{{ route('appointment-booking') }}" method="POST">
            {{csrf_field()}}
            <div class="flex">
                <div class="error fl-1 mr-2">
                    <div class="flex">
                        <label for="location">Location <b class="req">*</b></label>
                        <p></p>
                    </div>
                    <select name="location" id="location" class="input" required>
                        <option value="" selected disabled>Select nearest location...</option>
                        @foreach ($branches as $branch)
                            <option value="{{ $branch->id }}">{{ $branch->name }} Branch</option>
                        @endforeach
                    </select>
                </div>
                <div class="error fl-1">
                    <div class="flex">
                        <label for="visit_type">Visit Type <b class="req">*</b></label>
                        <p></p>
                    </div>
                    <select name="visit_type" id="visit_type" class="input" required>
                        <option value="" selected disabled>Choose visit type...</option>
                        @foreach ($types as $type)
                            <option value="{{ $type->id }}">{{ $type->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="error">
                <div class="flex">
                    <label for="doctor">Doctor <b class="req">*</b></label>
                    <p></p>
                </div>
                <select name="visit_type" id="doctor" class="input" required>
                    <option value="" selected disabled>Select doctor...</option>
                    @foreach ($doctors as $doctor)
                        <option value="{{ $doctor->id }}">{{ $doctor->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="flex">
                <div class="error fl-1 mr-2">
                    <div class="flex">
                        <label for="notes"> Notes <span class="text-gray-400 text-sm">(Optional)</span> </label>
                        <p></p>
                    </div>
                    <textarea name="notes" id="notes" cols="30" rows="10" class="input h-64" placeholder="Tell us what you want..."></textarea>
                </div>
                <div class="error fl-1">
                    <div class="flex">
                        <label for="name"> Attach X-ray, Scan or Picture(s) <span class="text-gray-400 text-sm">(Optional)</span> </label>
                        <p></p>
                    </div>
                    <div class="custom-file-upload h-64" onclick="getFile()">
                        <input type="file" id="scansFiles" name="scans" class="input fileInput hidden" oninput="showFiles()" multiple>
                        <p id="fileName" class="mt-30 mb-30">  Click to attach file(s)  </p> 
                        <i class="far fa-file-pdf" id="pdfIcon"></i>
                    </div>
                    
                </div>
            </div>
            <div class="error">
                <div class="flex">
                    <label for="date">Date & Time <b class="req">*</b></label>
                    <p></p>
                </div>
                <select name="date" id="date" class="input" required>
                    <option value="" selected disabled >Select a time...</option>
                    
                </select>
            </div>
            <div class="submit-button-container">
                <input type="submit" class="submit-button" value="Send">
            </div>
        </form>
    </div>
    <div class="contact-address fl-1 relative">
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
        <div class="appointment-btn mt-30 absolute bottom-0 w-full">
            <div class="submit-button-container alted mt-30">
                <input type="submit" class="submit-button alted" value="Schedule An Appointment">
            </div>
        </div>
    </div>
</div>
<script>
    function getFile(){
     document.getElementById("scansFiles").click();
    }

    function showFiles(){
        fake_path = document.getElementById('scansFiles').value
        document.getElementById("fileName").innerHTML = fake_path.split("\\").pop();
        document.getElementById("fileName").style.textAlign = "left";
        document.getElementById("pdfIcon").style.display = 'none';
    }
</script>
@endsection
