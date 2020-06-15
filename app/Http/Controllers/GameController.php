<?php
namespace App\Http\Controllers;

use App\Repositories\Interfaces\ClipRepositoryInterface;

class GameController extends Controller
{
    private $clipRepo;

    public function __construct(ClipRepositoryInterface $clipRepo)
    {
        $this->clipRepo = $clipRepo;
    }

    public function index()
    {
        $games = $this->clipRepo->findCachedDistinctGames();

        return view('games.index', [
            "games" => $games
        ]);
    }

    public function show($game)
    {
        $clips = $this->clipRepo->paginateByGame($game);

        return view('games.show', [
            "clips" => $clips,
            "game" => $game
        ]);
    }
}
