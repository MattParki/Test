<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\VideoPrice;

class VideoPriceController extends Controller
{


    //stores the video in the database
    public function storeVideo() {

        $video = new VideoPrice();

        $video->name     = request('name');
        $video->price    = request('price');

        $video->save();

        return redirect('/videos/createthevideo')->with('mssg2', 'Video created!');
    }

    public function editVideo($id)
    {

        $video = VideoPrice::findOrFail($id);

        $video->name     = request('name');
        $video->price    = request('price');

        $video->save();

        return redirect('/videos/createthevideo/display/')->with('mssg4', 'Video Updated!');
    }

    public function showVideoToEdit($id)
    {
        $video = VideoPrice::find($id);

        return view('videos.video_price_edit', ['video' => $video]);
    }

    public function show($id) {

        $video = VideoPrice::findOrFail($id);

        return view('videos.video_price_show', ['video' => $video]);
    }

    public function display() {

        $videos = VideoPrice::all();

//        dd($video);

        return view('videos.video_price_display', ['videos' => $videos]);
    }


    //just shows the view when navigation to /videos/createthevideo
    public function createVideo() {
        return view('videos.video_price');
    }

    //deletes the video if requested

    public function delete($id) {
        $video = VideoPrice::findOrFail($id);
        $video->delete();

        return redirect('/videos/test1')->with('delete', 'Order complete');
    }

}
