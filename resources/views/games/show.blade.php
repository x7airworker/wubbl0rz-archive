@extends('layout.app')

@section('title', $game)

@section('content')
    <div class="row">
        @foreach ($clips as $clip)
            <div class="col-sm-4 mt-md-4">
                <x-clip-component :clip="$clip"/>
            </div>
        @endforeach
    </div>
    <div class="d-flex justify-content-center mt-5 overflow-auto">
        {{ $clips->onEachSide(1)->links() }}
    </div>
@endsection
