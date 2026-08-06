@extends('layouts.app')

@section('content')


    <section class="dc-banner">

        <div class="banner-wrapper">


            <div class="banner-content">


                <span class="hero-tag">
                    DC STUDIOS
                </span>


                <h1>
                    <span>DC</span> MOVIES
                </h1>


            </div>



            <div class="banner-image-container">


                <img src="{{ asset('images/main/dcall5.webp') }}" alt="DC Movies">


            </div>


        </div>

    </section>




    <section class="movie-page">



        <div class="movie-tabs">


            <button class="active" data-type="now">

                Now Showing

            </button>


            <button data-type="coming">

                Coming Soon

            </button>


        </div>




        <div id="movie-content">


            @include('components.movie-content')


        </div>



    </section>

    <script>

        document.addEventListener('click', function (e) {


            let btn = e.target.closest('.movie-tabs button');


            if (!btn) return;



            let type = btn.dataset.type;


            let content = document.querySelector('#movie-content');


            content.classList.add('loading');



            fetch('/movies?type=' + type, {

                headers: {
                    "X-Requested-With": "XMLHttpRequest"
                }

            })


                .then(res => res.text())


                .then(html => {


                    content.innerHTML = html;



                    setTimeout(() => {

                        content.classList.remove('loading');

                    }, 150);



                    document.querySelectorAll('.movie-tabs button')
                        .forEach(b => b.classList.remove('active'));



                    btn.classList.add('active');



                });


        });

    </script>


@endsection