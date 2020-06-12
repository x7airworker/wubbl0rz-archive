<div class="card">
    <a href="{{ route('clips.show', [$clip]) }}">
        <img src="{{ $clip->thumbnail_url }}" class="card-img-top">
    </a>
    <div class="card-body">
        <h5 class="card-title">{{ $clip->title }}</h5>
        <i class="card-subtitle mb-2 text-muted">{{ $clip->game }}</i>
        <footer class="blockquote-footer">{{ $clip->creator }} @ {{ $clip->formatTime() }}</footer>
    </div>
</div>
