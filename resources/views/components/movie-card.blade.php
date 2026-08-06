<div class="movie-card">

    <img src="{{ asset($poster) }}">

    <div class="movie-overlay">

        <span>{{ $year }}</span>

        <h3>{{ $title }}</h3>

        <small>⭐ {{ $rating }}</small>

       <a href="{{ url('/movies/'.$movie->id) }}">
    VIEW DETAILS
</a>
    </div>

</div>