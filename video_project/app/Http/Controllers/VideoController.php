<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Video;

class VideoController extends Controller
{
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }

    public function index() {

        //$videos = Video::all();

        $videos = Video::latest()->get();

        return view('videos.index', [
            'videos' => $videos,
        ]);
    }

    public function show($id) {

        $video = Video::latest()->findOrFail($id);

        return view('videos.show', ['video' => $video]);
    }

    public function create() {
        return view('videos.create');
    }

    public function store() {

        $video = new Video();

        $video->title     = request('title');
        $video->description     = request('description');
        $video->genre     = request('genre');
        $video->length = request('length');
        $video->rating = request('rating');
        $video->year = request('year');

        $video->save();

        return redirect('/')->with('mssg', 'Thanks for inserting video');
    }

    public function delete($id) {
        $video = Video::findOrFail($id);
        $video->delete();

        return redirect('/videos/')->with('delete', 'Video Deleted');
    }
}
