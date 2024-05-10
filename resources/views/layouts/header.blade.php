<header class="header m-1 bg-custom-blue">
    <div class="row mt-3 mt-md-1">
        <div class="p-md-1 p-2 p-md-1 p-2">
            <div class="d-flex justify-content-between">
                <h4 class="welcoming">Hi, {{auth()->user()->first_name}}</h4>
                <div class="icon-container">
                    <a href="/logout">
                        <img src="{{asset('assets/images/Logout.png')}}" alt="" class="icon">
                    </a>
                </div>
            </div>
        </div>
        <div class="p-md-1 p-2 p-md-1 p-2">
            <h2 class="header-h2">Let's find you some medications!</h2>
        </div>
        <div class="my-3 my-md-1 p-md-1 p-2">
            <form action="{{ route('meds') }}" method="get">
                @csrf
                <div class="search-container d-flex">
                    <input type="text" name="search" placeholder="Search here..." class="form-control search-input"
                        value="{{request()->query('search')}}">
                    <button type="submit" class="btn text-white p-2">
                        <img src="{{asset('assets/images/Search.png')}}" alt="" class="text-black icon p-1 p-md-2">
                    </button>
                </div>
            </form>
        </div>
    </div>
</header>