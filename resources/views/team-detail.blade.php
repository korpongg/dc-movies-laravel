@extends('layouts.app')

@section('content')

<section class="character-detail-page">

<div class="character-hero">

    <div class="hero-glow"></div>

    <div class="banner-wrapper">
        <img
            src="{{ asset('images/teams_banners/' . $team->slug . '.webp') }}"
            alt="{{ $team->name }} Banner"
            class="img-fluid"
        >
    </div>

    <div class="hero-container">

        <div class="hero-text">

            <h1>
                {{ $team->name }}
            </h1>

            @if($team->description)

                <p>
                    {{ $team->description }}
                </p>

            @endif

        </div>

    </div>

</div>

</section>

{{-- TEAM MEMBERS --}}
@if($characters->isNotEmpty())

<section class="character-relations-section">

<div class="character-relations-container">

    <div class="character-relation-group">

        <div class="character-relation-title">

            <h3>
                Members
            </h3>

            <span>
                {{ $characters->count() }}
            </span>

        </div>


        <div class="character-relation-list">

            @foreach($characters as $character)

                <a
                    href="{{ route('characters.detail', $character->slug) }}"
                    class="character-relation-card"
                >

                    <div class="character-relation-image">

                        <img
                            src="{{ asset($character->image) }}"
                            alt="{{ $character->name }}"
                        >

                    </div>

                    <div class="character-relation-name">

                        {{ $character->name }}

                    </div>

                </a>

            @endforeach

        </div>

    </div>

</div>


</section>

@endif

@endsection
