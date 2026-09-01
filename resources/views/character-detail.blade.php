@extends('layouts.app')

@section('content')


<section class="character-detail-page">


<div class="character-hero">


    <div class="hero-glow"></div>

        <div class="banner-wrapper">
<img src="{{ asset('images/banners/' . $character->slug . '.webp') }}" alt="{{ $character->name }} Banner" class="img-fluid">        </div>

    <div class="hero-container">


        <div class="hero-text">


            <h1>
                {{ $character->name }}
            </h1>


            @if($character->real_name)

            <h2>
                {{ $character->real_name }}
            </h2>

            @endif


            <p>
                {{ $character->biography }}
            </p>


            <div class="stats">


            @foreach([
            'HEIGHT'=>$character->height,
            'WEIGHT'=>$character->weight,
            'EYE COLOR'=>$character->eye_color,
            'HAIR COLOR'=>$character->hair_color

            ] as $label=>$value)


            @if($value)

            <div class="stat">

                <span>
                    {{ $label }}
                </span>

                <strong>
                    {{ $value }}
                </strong>

            </div>

            @endif


            @endforeach


            </div>


        </div>


    </div>


</section>
@if($heroes->isNotEmpty() || $villains->isNotEmpty())
<section class="character-relations-section">

    <div class="character-relations-container">



        {{-- HEROES --}}
        @if($heroes->count())

            <div class="character-relation-group">

                <div class="character-relation-title">
                    <h3>Heroes</h3>
                    <span>{{ $heroes->count() }}</span>
                </div>

                <div class="character-relation-list">

                    @foreach($heroes as $related)

                        <a
                            href="{{ route('characters.detail', $related->slug) }}"
                            class="character-relation-card"
                        >

                            <div class="character-relation-image">

                                <img
                                    src="{{ asset($related->image) }}"
                                    alt="{{ $related->name }}"
                                >

                            </div>

                            <div class="character-relation-name">
                                {{ $related->name }}
                            </div>

                        </a>

                    @endforeach

                </div>

            </div>

        @endif


        {{-- VILLAINS --}}
        @if($villains->count())

            <div class="character-relation-group">

                <div class="character-relation-title">
                    <h3>Villains</h3>
                    <span>{{ $villains->count() }}</span>
                </div>

                <div class="character-relation-list">

                    @foreach($villains as $related)

                        <a
                            href="{{ route('characters.detail', $related->slug) }}"
                            class="character-relation-card"
                        >

                            <div class="character-relation-image">

                                <img
                                    src="{{ asset($related->image) }}"
                                    alt="{{ $related->name }}"
                                >

                            </div>

                            <div class="character-relation-name">
                                {{ $related->name }}
                            </div>

                        </a>

                    @endforeach

                </div>

            </div>

        @endif

    </div>

</section>

@endif
<section class="info-area">


@if($character->abilities)

<div class="info-box">

<h3>
ABILITIES
</h3>

<p>
{!! nl2br(e($character->abilities)) !!}
</p>

</div>

@endif



@if($character->weapons)

<div class="info-box">

<h3>
WEAPONS
</h3>

<p>
{!! nl2br(e($character->weapons)) !!}
</p>

</div>

@endif



@if($character->weakness)

<div class="info-box danger">

<h3>
WEAKNESS
</h3>

<p>
{!! nl2br(e($character->weakness)) !!}
</p>

</div>

@endif


</section>



@endsection