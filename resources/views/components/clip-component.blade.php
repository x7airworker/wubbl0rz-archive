<div class="card h-100">
    <a href="{{ route('clips.show', [$clip]) }}">
        <img src="{{ $clip->thumbnail_url }}" class="card-img-top" alt="Thumbnail">
    </a>
    <div class="card-body">
        <h5 class="card-title">{{ $clip->title }}</h5>
        <i class="card-subtitle mb-2 text-muted">{{ $clip->game }}</i>
        <footer class="blockquote-footer">{{ $clip->creator }} @ {{ $clip->formatTime() }}</footer>
    </div>
</div>
