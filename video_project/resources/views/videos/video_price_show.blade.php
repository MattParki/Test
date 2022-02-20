@extends('layouts.app')
@section('content')
    <div class="wrapper video-details">
        <h1 class=""> Video Name: </h1><h3 class="alert-info">{{ $video->name }}</h3><br />
        <h1 class=""> Video Price: </h1><h3 class="alert-info">{{ $video->price }}</h3><br />
    </div>


    <a href="/home">Click here to go back to CMS!</a>
@endsection
