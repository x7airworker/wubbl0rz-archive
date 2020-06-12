@extends('layout.app')

@section('title', 'Suche für "'. $query .'"')

@section('content')
    <h3>Clips</h3>
    <div class="row">
        @foreach ($clips as $clip)
            <div class="col-sm-4 mt-md-4">
                <x-clip-component :clip="$clip" />
            </div>
        @endforeach
    </div>
    <div class="d-flex justify-content-center mt-5">
        {{ $clips->links() }}
    </div>
    <hr>
    <h3>Streams</h3>
@endsection
