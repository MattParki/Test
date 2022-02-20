@extends('layouts.app')
@section('content')
<div class="wrapper video-details">
    <h1> Video - {{ $video->title }} </h1>
        <p class="description">Description - {{ $video->description }} </p>
        <p class="genre">Genre - {{ $video->genre }} </p>
        </ul>
    <div class="delete">
        <form action="/videos/{{ $video->id }}" method="post">
            @csrf
            @method('delete')
            <button>Delete Video</button>
        </form>

    </div>

</div>

<div>
    <a href="/videos" class="back"><- Back to all videos</a>
</div>

@endsection
