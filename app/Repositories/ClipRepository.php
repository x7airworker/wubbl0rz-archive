<?php
namespace App\Repositories;


use App\Clip;
use Illuminate\Support\Facades\Cache;

class ClipRepository implements Interfaces\ClipRepositoryInterface
{
    public function paginate()
    {
        return Clip::orderBy('created_at', 'DESC')->paginate(21);
    }

    public function paginateByGame($game)
    {
        return Clip::where('game', $game)->paginate(21);
    }

    function findDistinctGames()
    {
        return Clip::selectRaw('game, count(*) as num')
            ->groupBy('game')
            ->orderBy('num', 'DESC')
            ->get();
    }

    public function findCachedDistinctGames()
    {
        return Cache::remember('games', 21600, function() {
            return $this->findDistinctGames();
        });
    }

    public function paginateLikeTitleOrUser($term)
    {
        $term = strtolower($term);
        return Clip::whereRaw('LOWER(title) LIKE (?)', ["%{$term}%"])
            ->orWhereRaw('LOWER(creator) LIKE (?)', ["%{$term}%"])
            ->paginate(21);
    }
}
