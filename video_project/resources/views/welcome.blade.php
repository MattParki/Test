@extends('templates.header.header')
<br />
<div class="login-bar">
    @if (Route::has('login'))
        <div class="top-right links">
            @auth
                <a href="{{ url('home') }}">CMS</a>
            @else
                <a href="{{ route('login') }}">Login</a>

                @if (Route::has('register'))
                    <a href="{{route('register')}}"
                @endif
            @endauth
        </div>
    @endif
</div>
<br />
<div class="flex-center position-ref full-height">
    <br />
    <div class="content">
        <img src="/img/video-house.png" alt="video house logo">
        <div class="title m-b-md">
            YouFlix Videos
        </div>
        <div>
            <p class="mssg">{{ session('mssg') }}</p>
            <!-- the route is dynamically responding to the name we setup in the routes file -->
            <a href="{{ route('videos.create') }}">Click here to watch some videos</a>
        </div>
        <br />
    </div>
</div>

@extends('templates.footer.footer')
