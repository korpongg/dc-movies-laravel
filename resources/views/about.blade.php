@extends('layouts.app')

@section('content')



<section class="universe-final">

    <div class="universe-final-overlay"></div>

    <div class="universe-final-content">

        <span class="section-label">
            THE WORLD OF DC
        </span>

        <h2>
            More Than Heroes
        </h2>

        <p>
            The DC Universe is a world filled with legendary heroes,
            powerful villains, extraordinary places and stories that
            have inspired generations.
        </p>

            <p>
            Explore the characters, movies and locations that make
            this universe one of the most iconic worlds in popular culture.
        </p>

      

    </div>

</section>


<section class="universe-feature universe-characters">

    <div class="universe-feature-image">

        <img
            src="{{ asset('images/main/dcall.webp') }}"
            alt="DC Universe Characters"
        >

    </div>


    <div class="universe-feature-content">

        <span class="section-label">
            CHARACTERS
        </span>

        <h2>
            Meet The Legends
        </h2>

        <p>
            From Superman and Batman to Wonder Woman, The Flash,
            Aquaman and countless others, discover the heroes and
            villains who define the DC Universe.
        </p>

        <a href="{{ route('characters') }}" class="universe-link">
            VIEW CHARACTERS
            <span>➜</span>
        </a>

    </div>

</section>


<section class="universe-feature universe-movies">

    <div class="universe-feature-content">

        <span class="section-label">
            MOVIES & SERIES
        </span>

        <h2>
            Stories On Screen
        </h2>

        <p>
            Explore the movies and series that bring DC's legendary
            characters and stories to life on the big screen.
        </p>

        <a href="{{ route('movies') }}" class="universe-link">
            VIEW MOVIES
            <span>➜</span>
        </a>

    </div>


    <div class="universe-feature-image">

        <img
               src="{{ asset('images/main/dcall5.webp') }}"
            alt="DC Movies"
        >

    </div>

</section>


<section class="universe-feature universe-characters">

    <div class="universe-feature-image">

        <img
            src="{{ asset('images/main/dcall6.webp') }}"
            alt="DC Universe Characters"
        >

    </div>


    <div class="universe-feature-content">

        <span class="section-label">
            LOCATIONS
        </span>

        <h2>
            Worlds Behind The Legends
        </h2>

        <p>
            From the streets of Gotham City to the underwater kingdom
            of Atlantis, discover the places where legendary stories unfold.
        </p>

        <a href="{{ route('locations') }}" class="universe-link">
            EXPLORE LOCATIONS
            <span>➜</span>
        </a>

    </div>

</section>







@endsection