@extends('layout.app')

@section('title', 'Clip: "' . $clip->title . '" von ' . $clip->creator)

@section('content')
    <iframe width="100%" height="720px" src="{{ $url }}" allowfullscreen="true" clip="{{ $clip->clip_id }}"></iframe>
    <p>{{ $clip->views }} @if ($clip->views > 1 || $clip->views == 0) Klicks @else Klick @endif</p>
@endsection
