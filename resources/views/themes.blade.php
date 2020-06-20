@extends('layout.app')

@section('title', 'Themes')

@section('content')
    <div class="list-group mb-3 list-group-flush">
        @foreach ($themes as $t)
            <form method="POST">
                @csrf
                <input type="hidden" name="theme" value="{{ $t['name'] }}">
                <input type="submit" class="list-group-item list-group-item-action @if(strcmp($t['name'], $theme->name) == 0) active @endif" value="{{ $t['name'] }}">
            </form>
        @endforeach
    </div>
@endsection
