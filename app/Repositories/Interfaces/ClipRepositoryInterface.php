<?php
namespace App\Repositories\Interfaces;


interface ClipRepositoryInterface
{
    public function paginate();

    public function paginateByGame($game);

    function findDistinctGames();

    public function findCachedDistinctGames();

    public function paginateLikeTitleOrUser($term);
}
