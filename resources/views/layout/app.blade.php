<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- SEO -->
    <title>Wubbl0rz Archiv | @yield('title')</title>
    <meta name="description" content="Das Wubbl0rz Stream Archiv.">
    <!-- Styles -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Scripts -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <a class="navbar-brand" href="/">Wubbl0rz Archiv</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar"
            aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbar">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link {{ (request()->is('streams')) ? 'active' : '' }}" href="{{ route('streams.index') }}">Streams</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ (request()->is('clips')) ? 'active' : '' }}" href="{{ route('clips.index') }}">Clips</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ (request()->is('games')) ? 'active' : '' }}" href="{{ route('games.index') }}">Spiele</a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0" action="{{ route('search') }}" method="GET">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Suchbegriff" aria-label="Suchbegriff"
                       aria-describedby="search-button" name="query">
                <div class="input-group-append">
                    <button class="btn btn-success" type="submit" id="search-button">Suchen</button>
                </div>
            </div>
        </form>
    </div>
</nav>
<div class="container mt-3">
    <h2>@yield('title')</h2>
    <hr>
    @yield('content')
</div>
</body>
