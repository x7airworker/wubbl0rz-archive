@extends('layout.app')

@section('title', 'Spiele')

@section('content')
    <div class="list-group mb-3">
        @foreach ($games as $game)
            <a class="list-group-item list-group-item-action" href="{{ route('games.show', [$game->game]) }}">
                <span class="badge badge-info">{{ $game->num }} Clips</span>
                &nbsp;
                {{ $game->game }}
            </a>
        @endforeach
    </div>
@endsection
