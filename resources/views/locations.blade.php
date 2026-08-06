@extends('layouts.app')

@section('content')

<section class="dc-banner">

    <div class="banner-wrapper">

        <div class="banner-content">

            <span class="hero-tag">
                DC STUDIOS
            </span>

            <h1>
                <span>DC</span> LOCATIONS
            </h1>

        </div>

        <div class="banner-image-container">
            <img src="{{ asset('images/main/dcall6.webp') }}">
        </div>

    </div>

</section>


<section class="locations-page">

    <div class="locations-tabs">

        <button class="active" data-level="1">
            Planet
        </button>

        <button data-level="2">
            Locations
        </button>

        <button data-level="3">
            Buildings
        </button>

    </div>


    <div id="locations-content">

        @include('components.locations-content')

    </div>

</section>


<script>

document.addEventListener('click', function(e){

    let btn = e.target.closest('.locations-tabs button');

    if(!btn) return;

    let level = btn.dataset.level;

    let content = document.querySelector('#locations-content');

    content.classList.add('loading');

    fetch('/locations/filter?level=' + level,{
        headers:{
            "X-Requested-With":"XMLHttpRequest"
        }
    })

    .then(res=>res.text())

    .then(html=>{

        setTimeout(()=>{

            content.innerHTML = html;

            content.classList.remove('loading');

        },300);

        document
            .querySelectorAll('.locations-tabs button')
            .forEach(b=>b.classList.remove('active'));

        btn.classList.add('active');

    });

});

</script>

@endsection