<?php
namespace App\Http\Controllers;

use App\Repositories\Interfaces\ClipRepositoryInterface;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    private $clipRepo;

    public function __construct(ClipRepositoryInterface $clipRepo)
    {
        $this->clipRepo = $clipRepo;
    }

    public function index(Request $request) {
        $request->validate([
            'query' => 'required'
        ]);

        $query = $request->get('query');

        $clips = $this->clipRepo->paginateLikeTitleOrUser($query);
        $clips->setPageName('clips_page');

        return view('search', [
            "query" => $request->get('query'),
            "clips" => $clips
        ]);
    }
}
