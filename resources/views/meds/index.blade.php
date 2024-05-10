@extends('layouts.app')

@section('content')
<div class="container-fluid m-0 p-0 h-screen">
    @include('layouts.header')
    <div class="doctors my-3">
        @forelse($meds as $med)
        <div class="card doctor-card m-2 my-4">
            <div class="doctor">
                <div class="row">
                    <div class="col-4 col-md-3 my-auto">
                        <img src="{{asset($med->image)}}" alt="" class="doctor-image img-fluid">
                    </div>
                    <div class="col-4 col-md-6 my-auto">
                        <div class="m-1 m-md-3">
                            <h5 class="doctor-name">{{ ucwords($med->name) }}</h5>
                            <div class="doctor-speciality">
                                {{ ucwords($med->type) }}
                            </div>
                            <div class="rating">
                                <small>{{$med->description}}</small>
                            </div>
                        </div>
                    </div>
                    @if(auth()->user()->role == 'admin')
                    <div class="col-4 col-md-3 my-auto">
                        <div class="d-flex flex-col justify-content-around">
                            <a href="{{ route('meds.edit', $med->id) }}" class="btn btn-warning">Edit</a>
                            <a href="{{ route('meds.destroy', $med->id) }}" class="btn btn-danger">Delete</a>
                        </div>
                    </div>
                    @endif
                </div>
            </div>
        </div>
        @empty
        <div class="empty">
            No Meds Found...
        </div>
        @endforelse
        <div class="d-flex flex-row justify-content-center">
            {{$meds->appends(['search' => request()->query('search')])->links()}}
        </div>
    </div>
    {{-- end meds --}}
</div>

<br><br><br>
@include('layouts.nav')
@endsection