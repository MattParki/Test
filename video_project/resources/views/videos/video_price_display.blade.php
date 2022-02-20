@extends('layouts.app')
@section('content')
    <div class="wrapper create-video">
        <h1>All Videos & prices</h1>
        <div>
            <div class="wrapper video-index">
            <ul>
            @foreach($videos as $video)
                    <div class="video-item">
                        <img src="/img/video.png" alt="video icon">
                        <h4>{{ $video['name'] }}</h4><p class="testing1" id="testing1">Video price: <p class="testing2" id="testing2">£{{ $video->price }}</p><a href="/videos/createthevideo/display/video_edit/{{ $video->id }}"><p id="testing3">Edit</p></a>
                    </div>
            @endforeach
            </ul>
            <div>
                <!-- success message if video is created -->
                <p class="mssg4">{{ session('mssg4') }}</p>
            </div>
        </div>
        <br />
    </div>
    <div class="flex-center position-ref">
        <a href="/videos/createthevideo">Click here to create new video!</a>
    </div>
    <br />
    <div class="flex-center position-ref">
        <a href="/home">Click here to go back to CMS!</a>
    </div>


@endsection
