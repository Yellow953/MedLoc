@extends('layouts.app')

@section('content')
    <div class="container-fluid py-5 px-2 h-screen">
        <div class="row justify-content-center mx-4">
            <div class="col-6 text-center my-4">
                <img src="{{asset('assets/images/image1.png')}}" alt="">
                <h1 class="mt-3">Welcome</h1>
            </div>
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="col-12 col-lg-6 mx-auto my-4">
                    <div class="row">
                        <div class="col-6">
                            <input type="text" class="form-control custom-field" name="first_name" placeholder="First Name" required>
                        </div>
                        <div class="col-6">
                            <input type="text" class="form-control custom-field" name="last_name" placeholder="Last Name" required>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6 mx-auto">
                    <input type="date" class="form-control custom-field" name="dob" placeholder="Date of Birth" required>
                </div>
                <div class="col-12 col-lg-6 mx-auto my-4">
                    <select name="gender" class="form-control custom-field" required>
                        <option>Gender</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        <option value="other">Other</option>
                    </select>
                </div>
                <div class="col-12 col-lg-6 mx-auto my-4">
                    <input type="text" class="form-control custom-field" name="address" placeholder="Address" required>
                </div>
                <div class="col-12 col-lg-6 mx-auto my-4">
                    <input type="text" class="form-control custom-field" name="phone" placeholder="Phone Number" required>
                </div>
                <div class="col-12 col-lg-6 mx-auto my-4">
                    <input type="email" class="form-control custom-field" name="email" placeholder="Email" required>
                </div>
                <div class="col-12 col-lg-6 mx-auto my-4">
                    <input type="password" class="form-control custom-field" name="password" placeholder="********" required>
                </div>
                <div class="col-12 col-lg-6 mx-auto my-4">
                    <input type="password" class="form-control custom-field" name="password_confirmation" placeholder="********" required>
                </div>
                <div class="col-md-4 offset-md-4 my-4">
                    <button type="submit" class="custom-btn">Create Account</button>
                </div>
                <br>
                <div class="col-md-6 offset-md-3 d-flex">
                    <span class="gr-1 my-auto"></span>
                    <span class="w-50 text-center"><a href="/login" class="nav-link">Or Login</a></span>
                    <span class="gr-2 my-auto"></span>
                </div>
            </form>    
        </div>
    </div>
@endsection