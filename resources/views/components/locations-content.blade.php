<div class="locations-grid">

@foreach($locations as $location)

<a class="locations-card" href="{{ route('locations.detail', $location->slug) }}">

    <div class="locations-image">

        <img src="{{ asset('images/locations/' . $location->slug . '.webp') }}">

    </div>

    <div class="locations-info">

        <h3>{{ $location->name }}</h3>

        <span>{{ $location->type }}</span>

        <p>{{ $location->movie_origin }}</p>

    </div>

</a>

@endforeach

</div>