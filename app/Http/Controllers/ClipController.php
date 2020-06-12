<?php

namespace App\Http\Controllers;

use App\Clip;

class ClipController extends Controller
{
    public function index()
    {
        $clips = Clip::orderBy('created_at', 'desc')->paginate(21);

        return view('clips.index', [
            "clips" => $clips
        ]);
    }

    public function show(Clip $clip) {
        $url = "https://clips.twitch.tv/embed?clip=" . $clip->clip_id . "&autoplay=false&parent=" . env('TWITCH_PARENT');

        return view('clips.show', [
            "clip" => $clip,
            "url" => $url
        ]);
    }
}
