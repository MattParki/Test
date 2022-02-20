@extends('layouts.app')
@section('content')
<div class="wrapper create-video">
    <h1>Create a New Video</h1>
    <form action="{{ route('videos.store') }}" method="post">
        @csrf
        <label for="name">Video Title</label>
        <input type="text" id="title" name="title">
        <label for="description">Video Description</label>
        <input type="text" id="description" name="description">
        <label for="genre">Video Genre</label>
        <select name="genre" id="genre">
            <option value="horror">Horror</option>
            <option value="comedy">Comedy</option>
            <option value="action">Action</option>
            <option value="thriller">Thriller</option>
        </select>
        <label for="year">Year Created</label>
        <input type="number" id="year" name="year">
        <input type="submit" value="Submit Video">
    </form>


</div>
<div class="flex-center position-ref">
    <a href="/">Click here to go back home!</a>
    <a href="/home">Click here to go back to CMS!</a>
</div>

@endsection
