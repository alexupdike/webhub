@extends("layout.main")

@section("content")
    <div class="home-page">
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif
    
            <div class="content">
                <div class="box">
                    We are in development.
                </div>
            </div>
        </div>
    </div>
@endsection
