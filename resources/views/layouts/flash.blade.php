@if ($message = Session::get('success'))
    <div class="alert alert-success alert-dismissible fade show d-flex m-4" role="alert">
        <strong>{{ $message }}</strong>
    </div>
@endif

@if ($message = Session::get('danger'))
    <div class="alert alert-danger alert-dismissible fade show m-4" role="alert">
        <strong>{{ $message }}</strong>
    </div>
@endif

@if ($message = Session::get('warning'))
    <div class="alert alert-warning alert-dismissible fade show m-4" role="alert">
        <strong>{{ $message }}</strong>
    </div>
@endif

@if ($message = Session::get('info'))
    <div class="alert alert-primary alert-dismissible fade show m-4" role="alert">
        <strong>{{ $message }}</strong>
    </div>
@endif

@if ($errors->any())
    <div class="alert alert-danger alert-dismissible fade show m-4" role="alert">
        <strong>Please check the form below for errors</strong>
    </div>
@endif
