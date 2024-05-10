@extends('layouts.app')

@section('content')
<div class="container-fluid py-5 px-2 h-screen">
    <div class="row">
        <div class="col-2 offset-1 back-container">
            <a href="{{ route('meds') }}">
                <img src="{{asset('assets/images/left_arrow.png')}}" alt="" class="back my-2">
            </a>
        </div>
    </div>
    <div class="row justify-content-center mx-4">
        <div class="col-6 text-center my-4">
            <img src="{{asset('assets/images/image1.png')}}" alt="">
            <h1 class="mt-3">Edit Profile</h1>
        </div>
        <form method="POST" action="/profile/{{$user->id}}/save">
            @csrf
            <div class="col-12 col-lg-6 mx-auto my-4">
                <div class="row">
                    <div class="col-6">
                        <input type="text" class="form-control custom-field" name="first_name"
                            value="{{$user->first_name}}" placeholder="First Name" required>
                    </div>
                    <div class="col-6">
                        <input type="text" class="form-control custom-field" name="last_name"
                            value="{{$user->last_name}}" placeholder="Last Name" required>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6 mx-auto">
                <input type="date" class="form-control custom-field" name="dob" placeholder="Date of Birth">
            </div>
            <div class="col-12 col-lg-6 mx-auto my-4">
                <select name="gender" class="form-control custom-field" required>
                    <option>Gender</option>
                    <option value="male" {{$user->gender == "male" ? 'selected' : ''}}>Male</option>
                    <option value="female" {{$user->gender == "female" ? 'selected' : ''}}>Female</option>
                    <option value="other" {{$user->gender == "other" ? 'selected' : ''}}>Other</option>
                </select>
            </div>
            <div class="col-12 col-lg-6 mx-auto my-4">
                <input type="text" class="form-control custom-field" name="address" value="{{$user->address}}"
                    placeholder="Address" required>
            </div>
            <div class="col-12 col-lg-6 mx-auto my-4">
                <input type="text" class="form-control custom-field" name="phone" value="{{$user->phone}}"
                    placeholder="Phone Number" required>
            </div>
            <div class="col-12 col-lg-6 mx-auto mt-4 mb-2">
                <input type="email" class="form-control custom-field" name="email" value="{{$user->email}}"
                    placeholder="Email" required>
            </div>
            <div class="col-12 col-lg-6 mx-auto mb-4 mt-2">
                <label class="mx-2 text-sm text-muted">Please enter password to change anything</label>
                <input type="password" class="form-control custom-field" name="password" required>
            </div>
            <div class="col-12 col-lg-6 mx-auto my-4">
                <input type="password" class="form-control custom-field" name="new_password" placeholder="New Password">
            </div>
            <div class="col-12 col-lg-6 mx-auto my-4">
                <input type="password" class="form-control custom-field" name="password_confirmation"
                    placeholder="Confirm Password">
            </div>
            <div class="col-md-4 offset-md-4 my-4">
                <button type="submit" class="custom-btn">Save</button>
            </div>
        </form>
    </div>
</div>
@endsection