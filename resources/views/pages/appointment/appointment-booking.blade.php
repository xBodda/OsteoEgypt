@extends('layouts.app')


@section('title')
    Appointment Booking
@endsection


@section('contents')

<p>
    When you visit our clinic you can expect to receive world class care. Expert osteopath specialists and caring clinical staff provide you with an exceptional health care experience.
</p>


<form action="">
    @csrf
    <input type="text" class="datepicker">

</form>
@endsection
