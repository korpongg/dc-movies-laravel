@extends('layouts.app')

@section('content')

<section class="movie-detail-page">

    <div class="movie-hero">

        <div class="movie-banner">

            <img src="{{ asset($movie->backdrop) }}"
                 alt="{{ $movie->title }}">

        </div>

        <div class="movie-overlay"></div>

        <div class="movie-container">

            <div class="movie-poster">

                <img src="{{ asset($movie->poster) }}"
                     alt="{{ $movie->title }}">

            </div>

            <div class="movie-content">

                <span class="movie-tag">
                    {{ $movie->universe }} • {{ $movie->type }}
                </span>

                <h1>
                    {{ $movie->title }}
                </h1>

                <p class="movie-description">
                    {{ $movie->synopsis }}
                </p>

                <div class="movie-stats">

                    <div class="movie-stat">

                        <span>Release</span>

                        <strong>
                            {{ $movie->release_year }}
                        </strong>

                    </div>

                    <div class="movie-stat">

                        <span>Runtime</span>

                        <strong>
                            {{ $movie->runtime }} MIN
                        </strong>

                    </div>

                    <div class="movie-stat">

                        <span>IMDb</span>

                        <strong>
                            ⭐ {{ $movie->imdb_rating }}
                        </strong>

                    </div>

                    <div class="movie-stat">

                        <span>Rotten</span>

                        <strong>
                            🍅 {{ $movie->rotten_score }}%
                        </strong>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

<section class="movie-characters-section">

    <div class="movie-characters-container">

        <div class="section-header">
            <h2 class="cha_color">Characters</h2>
            <span>{{ $characters->count() }} Characters</span>
        </div>

        {{-- HEROES --}}
        @php
            $heroes = $characters->where('alignment', 'Hero');
            $villains = $characters->where('alignment', 'Villain');
            $antiHeroes = $characters->where('alignment', 'Anti-Hero');
        @endphp

        @if($heroes->count())
            <div class="character-category">

                <div class="character-category-title">
                    <h3>Heroes</h3>
                    <span>{{ $heroes->count() }}</span>
                </div>

                <div class="character-circle-list">

                    @foreach($heroes as $character)

                        <a
                            href="{{ route('characters.detail', $character->slug) }}"
                            class="character-circle-card"
                        >

                            <div class="character-circle-image">
                                <img
                                    src="{{ asset($character->image) }}"
                                    alt="{{ $character->name }}"
                                >
                            </div>

                            <div class="character-circle-name">
                                {{ $character->name }}
                            </div>

                        </a>

                    @endforeach

                </div>

            </div>
        @endif


        {{-- VILLAINS --}}
        @if($villains->count())
            <div class="character-category">

                <div class="character-category-title">
                    <h3>Villains</h3>
                    <span>{{ $villains->count() }}</span>
                </div>

                <div class="character-circle-list">

                    @foreach($villains as $character)

                        <a
                            href="{{ route('characters.detail', $character->slug) }}"
                            class="character-circle-card"
                        >

                            <div class="character-circle-image">

                                <img
                                    src="{{ asset($character->image) }}"
                                    alt="{{ $character->name }}"
                                >

                            </div>

                            <div class="character-circle-name">
                                {{ $character->name }}
                            </div>

                        </a>

                    @endforeach

                </div>

            </div>
        @endif


        {{-- ANTI HEROES --}}
        @if($antiHeroes->count())
            <div class="character-category">

                <div class="character-category-title">
                    <h3>Anti-Heroes</h3>
                    <span>{{ $antiHeroes->count() }}</span>
                </div>

                <div class="character-circle-list">

                    @foreach($antiHeroes as $character)

                        <a
                            href="{{ route('characters.detail', $character->slug) }}"
                            class="character-circle-card"
                        >

                            <div class="character-circle-image">

                                <img
                                    src="{{ asset( $character->image) }}"
                                    alt="{{ $character->name }}"
                                >

                            </div>

                            <div class="character-circle-name">
                                {{ $character->name }}
                            </div>

                        </a>

                    @endforeach

                </div>

            </div>
        @endif

    </div>

</section>

<section class="movie-info-section">

    <div class="movie-info-grid">

        <div class="movie-info-card">

            <h3>Director</h3>

            <p>{{ $movie->director }}</p>

        </div>

        <div class="movie-info-card">

            <h3>Cast</h3>

            <p>{{ $movie->actors }}</p>

        </div>

        <div class="movie-info-card">

            <h3>Genre</h3>

            <p>{{ $movie->genre }}</p>

        </div>

        <div class="movie-info-card">

            <h3>Budget</h3>

            <p>

                @if($movie->budget)

                ${{ number_format($movie->budget) }}

                @else

                -

                @endif

            </p>

        </div>

        <div class="movie-info-card">

            <h3>Box Office</h3>

            <p>

                @if($movie->box_office)

                ${{ number_format($movie->box_office) }}

                @else

                -

                @endif

            </p>

        </div>

    </div>

</section>

@endsection