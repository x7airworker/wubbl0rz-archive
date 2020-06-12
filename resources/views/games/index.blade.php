@extends('layout.app')

@section('title', 'Spiele')

@section('content')
    @foreach ($games as $game)
        <a class="dropdown-item" href="{{ route('games.show', [$game]) }}">{{ $game }}</a>
    @endforeach
@endsection
