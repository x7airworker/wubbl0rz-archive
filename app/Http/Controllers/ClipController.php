<?php

namespace App\Http\Controllers;

use App\Clip;
use App\Repositories\Interfaces\ClipRepositoryInterface;

class ClipController extends Controller
{
    private $clipRepo;

    public function __construct(ClipRepositoryInterface $clipRepo)
    {
        $this->clipRepo = $clipRepo;
    }

    public function index()
    {
        $clips = $this->clipRepo->paginate();

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
