<?php
namespace App\Repositories\Interfaces;


interface ThemeRepositoryInterface
{
    function getThemes();

    public function getThemesCached();

    public function getThemeByName($name);
}
