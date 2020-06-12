<?php

namespace App\Http\Controllers;

use App\Clip;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index(Request $request) {
        $query = $request->get('query');

        $clips = Clip::where('title', 'ilike', '%' . $query . '%')->orWhere('creator', 'ilike', '%' . $query . '%')->paginate(21);
        $clips->setPageName('clips_page');

        return view('search', [
            "query" => $request->get('query'),
            "clips" => $clips
        ]);
    }
}
