@extends('layouts.app')
@section('content')

<div class="wrapper video-index">
    <h1>Video Orders</h1>

    @foreach($videos as $video)
        <div class="video-item">
            <img src="/img/video.png" alt="video icon">
            <h4><a href="/videos/{{ $video->id }}">{{ $video->name }} </a></h4><p class="testing1" id="testing1">Created at: <p class="testing2" id="testing2">{{ $video->created_at }}</p>

        </div>

    @endforeach
    <div>
        <p class="delete">{{ session('delete') }}</p>
    </div>
</div>

<div class="flex-center position-ref">
    <a href="/">Click here to go back home!</a>
</div>
<br />
<div class="flex-center position-ref">
<a href="/home">Click here to go back to CMS!</a>
</div>

@endsection
