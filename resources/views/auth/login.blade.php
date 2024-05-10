@extends('layouts.app')

@section('content')
    <div class="container-fluid py-5 px-2 h-screen">
        <div class="row justify-content-center mx-4">
            <div class="col-10 text-center my-4">
                <img src="{{asset('assets/images/image1.png')}}" alt="">
                <h1 class="mt-3">Welcome Back</h1>
            </div>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="col-12 col-md-6 mx-auto my-4">
                    <input type="email" class="form-control custom-field" name="email" placeholder="Email" required>
                </div>
                <div class="col-12 col-md-6 mx-auto my-4">
                    <input type="password" class="form-control custom-field" name="password" placeholder="********" required>
                </div>
                <div class="col-md-4 offset-md-4 my-4">
                    <button type="submit" class="custom-btn">Login</button>
                </div>
            </form>
            <div class="d-flex">
                <span class="gr-1 my-auto"></span>
                <span class="w-50 text-center"><a href="/register" class="nav-link">Or Sign Up</a></span>
                <span class="gr-2 my-auto"></span>
            </div>
        </div>
    </div>
@endsection