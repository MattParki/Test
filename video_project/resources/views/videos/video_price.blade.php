@extends('layouts.app')
@section('content')
<div class="wrapper create-video">
    <h1>Create a New Video & add price</h1>
    <form action="{{ route('videos.storeVideo') }}" method="post">
        @csrf
        <label for="type">Choose Video Name</label>
        <input type="text" name="name">
        <label for="type">Set Video Price</label>
        <input type="text" name="price"><br />
        <input type="submit" class="test123">
    </form>
    <!-- listing all of the videos below that are created -->

    <br />
    <div>
        <!-- success message if video is created -->
        <p class="mssg2">{{ session('mssg2') }}</p>
    </div>

    <div class="">
        <a href="/videos/createthevideo/display">Click here to see all videos created</a>
    </div>



         <!-- delete the videos -->
    <div>
        <p class="delete">{{ session('deletePrice') }}</p>
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
