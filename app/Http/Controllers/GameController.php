<?php

namespace App\Http\Controllers;

use App\Clip;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class GameController extends Controller
{
    public function index()
    {
        $games = Cache::remember('games', 21600, function() {
            return Clip::selectRaw('game, count(*) as num')
                ->groupBy('game')
                ->orderBy('num', 'DESC')
                ->get();
        });

        return view('games.index', [
            "games" => $games
        ]);
    }

    public function show($game)
    {
        $clips = Clip::where('game', $game)->paginate(21);

        return view('games.show', [
            "clips" => $clips,
            "game" => $game
        ]);
    }
}
