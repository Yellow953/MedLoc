@extends('layouts.app')

@section('content')
<div class="container-fluid m-0 p-0 h-screen">
    <div class="hero-area bg-custom-blue pt-3">
        <h1 class="headline text-white py-2">MedLoc</h1>
        <div class="row bg-custom-blue">
            <div class="col-7 text-center pt-5">
                <h4 class="subline text-custom-grey">under great care</h4>
            </div>
            <div class="col-5 my-auto">
                <img src="{{asset('assets/images/doctor.png')}}" alt="" class="doctor">
            </div>
        </div>
    </div>
    <div class="banner w-100">
        <div class="text-center">
            <p class="call-to-action mx-2 my-5">
                Get to know your doctors and book your appointment online
            </p>
            @if (Auth::check())
            <div class="rectangle-1 d-flex">
                <div class="login py-3"><a href="{{ route('meds') }}">Medications</a></div>
                <div class="register py-3"><a href="{{ route('logout') }}">Logout</a></div>
            </div>
            @else
            <div class="rectangle-1 d-flex">
                <div class="login py-3"><a href="{{ route('login') }}">Sign In</a></div>
                <div class="register py-3"><a href="{{ route('register') }}">Register</a></div>
            </div>
            @endif
        </div>
    </div>
</div>
@endsection