<?php

namespace App\Http\Controllers;

use App\Repositories\Interfaces\ThemeRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ThemeController extends Controller
{
    private $themesRepo;

    public function __construct(ThemeRepositoryInterface $themesRepo)
    {
        $this->themesRepo = $themesRepo;
    }

    public function index()
    {
        $themes = $this->themesRepo->getThemesCached();

        return view('themes', [
            "themes" => $themes
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            "theme" => "required"
        ]);

        $themeName = $request->get('theme');
        $theme = $this->themesRepo->getThemeByName($themeName);

        return redirect(route('themes.index'))->cookie('theme', json_encode([
            "name" => $themeName,
            "url" => $theme['cssCdn']
        ]));
    }
}
