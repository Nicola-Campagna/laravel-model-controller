{{-- @if (isset($movies))
    <div class="card h-100">
        <div class="card-body d-flex flex-column">
            <h5 class="card-title">{{ $movies->genre }}
            </h5>
            <h6 class="card-subtitle mb-2 text-muted">
                {{ $movies->directory }}
            </h6>

        </div>
    </div>
    @if (isset($movie_key))
        <a href="{{ route('movie-details', ['id' => $book_key]) }}" class="card-link mt-auto"> vai al dettaglio</a>
    @endif
@else
    <div class="card h-100">
        <div class="card-body d-flex flex-column">
            <h5 class="card-title">MOVIE NOT FOUND</h5>
        </div>
    </div>
@endif --}}
