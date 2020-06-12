@extends('layout.app')

@section('title', 'Start')

@section('content')
    <iframe src="https://player.twitch.tv/?channel=Wubbl0rz&parent={{ env('TWITCH_PARENT') }}" width="100%" height="720">

    </iframe>
@endsection
