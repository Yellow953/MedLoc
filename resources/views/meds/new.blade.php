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
            <h1 class="mt-3">New Medication</h1>
        </div>
        <form method="POST" action="{{ route('meds.create') }}">
            @csrf
            <div class="col-12 col-lg-6 mx-auto my-4">
                <div class="row">
                    <div class="col-12">
                        <input type="text" class="form-control custom-field" name="name" value="{{ old('name') }}"
                            placeholder="Name" required>
                    </div>

                    <div class="col-12 mx-auto my-4">
                        <select name="type" class="form-control custom-field" required>
                            <option>Type</option>
                            <option value="Antibiotic">Antibiotic</option>
                            <option value="Vitamin">Vitamin</option>
                        </select>
                    </div>

                    <div class="col-12">
                        <input type="file" class="form-control custom-field" name="image">
                    </div>

                    <div class="col-12 mt-3">
                        <textarea name="description" id="description" rows="5" placeholder="Description..."
                            class="form-control custom-field">{{ old('description') }}</textarea>
                    </div>
                </div>
            </div>
            <div class="col-md-4 offset-md-4 my-4">
                <button type="submit" class="custom-btn">Create</button>
            </div>
        </form>
    </div>
</div>
@endsection