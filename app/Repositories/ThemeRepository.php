<?php
namespace App\Repositories;


use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;

class ThemeRepository implements Interfaces\ThemeRepositoryInterface
{
    function getThemes()
    {
        $response = Http::get("https://bootswatch.com/api/4.json");
        if ($response->ok()) {
            return $response->json()['themes'];
        }

        return null;
    }

    public function getThemesCached()
    {
        return Cache::remember('themes', 86400, function() {
            return $this->getThemes();
        });
    }

    public function getThemeByName($name)
    {
        foreach ($this->getThemesCached() as $theme) {
            if (strcmp(strtolower($name), strtolower($theme['name'])) == 0) {
                return $theme;
            }
        }

        return $this->getThemeByName('Solar');
    }
}
