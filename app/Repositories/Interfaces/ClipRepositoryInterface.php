<?php
namespace App\Repositories\Interfaces;


interface ClipRepositoryInterface
{
    public function paginate();

    public function paginateByGame($game);

    public function findDistinctGames();

    public function findCachedDistinctGames();

    public function paginateLikeTitleOrUser($term);
}
