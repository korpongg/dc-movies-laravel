@extends('layouts.app')

@section('content')


<div class="location-detail-page">


    <section class="location-hero">


        <div class="location-banner">

            <img 
            src="{{ asset('images/locations/' . $location->slug . '.webp') }}"
            alt="{{ $location->name }}"
            >

        </div>



        <div class="location-overlay"></div>



        <div class="location-container">


            <div class="location-content">


                <span class="location-tag">
                    DC LOCATION
                </span>



                <h1>
                    {{ $location->name }}
                </h1>



                <p class="location-description">

                    {{ $location->movie_origin }}

                </p>



                <div class="location-stats">


                    <div class="location-stat">

                        <span>
                            TYPE
                        </span>

                        <strong>
                            {{ $location->type }}
                        </strong>

                    </div>



                    <div class="location-stat">

                        <span>
                            LEVEL
                        </span>

                        <strong>
                            {{ $location->level }}
                        </strong>

                    </div>


                </div>


            </div>


        </div>


    </section>





    <section class="location-info-section">


        <div class="location-info-grid">



            <div class="location-info-card">

                <h3>
                    ABOUT LOCATION
                </h3>


                <p>

                    {{ $location->description ?? 'No description available.' }}

                </p>


            </div>



            <div class="location-info-card">

                <h3>
                    MOVIE ORIGIN
                </h3>


                <p>

                    {{ $location->movie_origin }}

                </p>


            </div>



        </div>


    </section>


</div>


@endsection