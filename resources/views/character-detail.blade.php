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