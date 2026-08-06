@extends('layouts.app')

@section('content')

        <section class="dc-banner">
            <div class="banner-wrapper">

                <div class="banner-content">
<span class="hero-tag">
    EVERY LEGEND HAS A STORY
</span>

<h1>
    DISCOVER THE<br>
    <span>DC</span> UNIVERSE
</h1>

<p>
    From Gotham City to Metropolis,
    discover the heroes, villains, movies,
    and legendary stories that shaped generations.
</p>

                    <div class="banner-buttons">

                        <a href="#" class="btn-primary">
                            EXPLORE NOW ➔
                        </a>

                        <a href="#" class="btn-secondary">
                            VIEW CHARACTERS ➔
                        </a>

                    </div>

                </div>

                <div class="banner-image-container">

                    <img src="{{ asset('images/main/dcall.webp') }}" alt="Supergirl DC Studios">

                </div>


            </div>
        </section>


        <div class="dc-grid">

            <section class="theme-grid">
                <!-- Peacemaker -->
                <div class="theme-tile" style="background-image:url('{{ asset('images/background/peacemaker.webp') }}')">

                    <div class="tile-content">
                        <img src="{{ asset('images/logo/peacemaker-logo.webp') }}" class="brand-logo" alt="Peacemaker">

                        <h2>Peace at Any Cost</h2>

                        <p>
                            A fearless antihero who will do whatever it takes
                            to achieve peace, no matter the price.
                        </p>
                    </div>

                    <img src="{{ asset('images/chars/peacemaker-chars.webp') }}" class="tile-character" alt="Peacemaker">

                    <a href="#" class="btn-shop">
                        CHARACTER
                    </a>

                </div>
                <!-- Supergirl -->
                <div class="theme-tile "
                    style="background-image:url('{{ asset('images/background/supergirl.webp') }}');display:none">

                    <div class="tile-content">
                        <img src="{{ asset('images/logo/supergirl-logo.webp') }}" class="brand-logo" alt="Supergirl">

                        <h2>Woman of Tomorrow</h2>

                        <p>
                            Hope shines brighter than any star.
                            Discover the next generation of heroes.
                        </p>
                    </div>

                    <img src="{{ asset('images/chars/supergirl-chars.webp') }}" class="tile-character" alt="Supergirl">

                    <a href="#" class="btn-shop">
                        CHARACTER
                    </a>

                </div>


                <!-- Superman -->
                <div class="theme-tile" style="background-image:url('{{ asset('images/background/superman.webp') }}')">

                    <div class="tile-content">

                        <img src="{{ asset('images/logo/superman-logo.webp') }}" class="brand-logo" alt="Superman">

                        <h2>The Last Son of Krypton</h2>

                        <p>
                            Truth. Hope. Legacy.
                            Every legend begins with a symbol.
                        </p>

                    </div>

                    <img src="{{ asset('images/chars/superman-chars.webp') }}" class="tile-character" alt="Superman">

                    <a href="#" class="btn-shop">
                        CHARACTER
                    </a>

                </div>


                <!-- Aquaman -->
                <div class="theme-tile" style="background-image:url('{{ asset('images/background/aquanman.webp') }}')">

                    <div class="tile-content">

                        <img src="{{ asset('images/logo/aquaman-logo.webp') }}" class="brand-logo" alt="Aquaman">

                        <h2>King of Atlantis</h2>

                        <p>
                            Rule the depths of Atlantis.
                            Where oceans hide untold legends.
                        </p>

                    </div>

                    <img src="{{ asset('images/chars/aquaman-chars.webp') }}" class="tile-character" alt="Aquaman">

                    <a href="#" class="btn-shop">
                        CHARACTER
                    </a>

                </div>


                <!-- Flash -->
                <div class="theme-tile" style="background-image:url('{{ asset('images/background/flash.webp') }}')">

                    <div class="tile-content">

                        <img src="{{ asset('images/logo/flash-logo.webp') }}" class="brand-logo" alt="Flash">

                        <h2>The Fastest Man Alive</h2>

                        <p>
                            Every second matters.
                            Race beyond the impossible.
                        </p>

                    </div>

                    <img src="{{ asset('images/chars/flash-chars.webp') }}" class="tile-character" alt="Flash">

                    <a href="#" class="btn-shop">
                        CHARACTER
                    </a>

                </div>


                <!-- Black Adam -->
                <div class="theme-tile" style="background-image:url('{{ asset('images/background/blackadam.webp') }}')">

                    <div class="tile-content">

                        <img src="{{ asset('images/logo/blackadam-logo.webp') }}" class="brand-logo" alt="Black Adam">

                        <h2>The Wrath of Kahndaq</h2>

                        <p>
                            Power born from fury.
                            Justice has a darker side.
                        </p>

                    </div>

                    <img src="{{ asset('images/chars/blackadam-chars.webp') }}" class="tile-character" alt="Black Adam">

                    <a href="#" class="btn-shop">
                        CHARACTER
                    </a>

                </div>

            </section>

        </div>

        <div id="funkoCarousel" class="carousel slide" data-ride="carousel" data-interval="5000">

            <ol class="carousel-indicators">
                <li data-target="#funkoCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#funkoCarousel" data-slide-to="1"></li>
                <li data-target="#funkoCarousel" data-slide-to="2"></li>
            </ol>

            <div class="carousel-inner">
                <!-- สไลด์ที่ 4: SUPERMAN - โทนสีฟ้าครามประกายไฟสตูดิโอ (Man of Steel Blue) -->
                <!-- สไลด์ที่ 4: SUPERMAN (2025/2026 Cinematic) - โทนน้ำเงินมิดไนท์บลู ตัดแสงทองอรุณรุ่ง -->
                <!-- สไลด์ที่ 4: SUPERMAN (2025/2026) - โทนสีฟ้าพรีเมียมคริปโตเนียน (Royal Electric Blue) -->
                <div class="carousel-item active">
                    <section class="funko-banner"
                        style="background-image: url(&quot;data:image/svg+xml,%3Csvg viewBox='0 0 200 200' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='noiseFilter'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.75' numOctaves='3' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23noiseFilter)' opacity='0.05'/%3E%3C/svg%3E&quot;), radial-gradient(circle at 68% 45%, #00bcff 0%, #0066cc 45%, #002255 85%, #000b1a 100%);">
                        <div class="funko-banner-container">

                            <div class="funko-content">
                                <span class="sub-title">DC UNIVERSE</span>
                                <h2 class="main-title">Up, Up and Away!</h2>
                                <p class="description">The Metropolis hero gets a stylized look! Add the all-new cinematic
                                    Superman (2025) Funko POP! vinyl figure to your definitive collection today.</p>
                                <a href="#" class="btn-preorder">PRE-ORDER NOW</a>
                            </div>

                            <div class="funko-image-container mr-5"
                                style="display: flex; justify-content: flex-end; align-items: center;">
                                <img src="{{ asset('images/panel/superman-2025-model.png') }}" alt="Superman Funko POP"
                                    style="height: 320px; width: auto; object-fit: contain; filter: drop-shadow(0 15px 20px rgba(0,0,0,0.4));">
                            </div>

                        </div>
                    </section>
                </div>
                <!-- สไลด์ที่ 1: THE FLASH FUNKO POP! (2023) -->
                <div class="carousel-item">
                    <section class="funko-banner"
                        style="background-image: url(&quot;data:image/svg+xml,%3Csvg viewBox='0 0 200 200' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='noiseFilter'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.8' numOctaves='3' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23noiseFilter)' opacity='0.04'/%3E%3C/svg%3E&quot;), radial-gradient(circle at 65% 50%, #ff1e27 0%, #b80d13 50%, #4a0205 100%);">
                        <div class="funko-banner-container">

                            <!-- ฝั่งข้อความ (The Flash) -->
                            <div class="funko-content">
                                <span class="sub-title">DC UNIVERSE</span>
                                <h2 class="main-title">Worlds Collide</h2>
                                <p class="description">Race through the multiverse! Speed up your collection with the
                                    exclusive The Flash (2023) Funko POP! vinyl figure before it's gone in a flash.</p>
                                <a href="#" class="btn-preorder">PRE-ORDER NOW</a>
                            </div>

                            <!-- ฝั่งรูปภาพ (ล็อกความสูง 320px พอดีกับแบนเนอร์) -->
                            <div class="funko-image-container mr-5"
                                style="display: flex; justify-content: flex-end; align-items: center;">
                                <img src="{{ asset('images/panel/flash.png') }}" alt="The Flash Funko POP"
                                    style="height: 320px; width: auto; object-fit: contain; filter: drop-shadow(0 15px 20px rgba(0,0,0,0.4));">
                            </div>

                        </div>
                    </section>
                </div>
                <!-- สไลด์ที่ 2: BATMAN THE DARK KNIGHT FUNKO POP! -->
                <div class="carousel-item">
                    <section class="funko-banner"
                        style="background-image: url(&quot;data:image/svg+xml,%3Csvg viewBox='0 0 200 200' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='noiseFilter'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.8' numOctaves='3' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23noiseFilter)' opacity='0.04'/%3E%3C/svg%3E&quot;), radial-gradient(circle at 65% 50%, #1e3c72 0%, #102a45 60%, #050b14 100%);">
                        <div class="funko-banner-container">

                            <!-- ฝั่งข้อความ (Batman) -->
                            <div class="funko-content">
                                <span class="sub-title">DC UNIVERSE</span>
                                <h2 class="main-title">The Dark Knight</h2>
                                <p class="description">Protect Gotham City from the chaos. Guardian of the night, the
                                    definitive Batman: The Dark Knight Funko POP! is ready to join your shelf.</p>
                                <a href="#" class="btn-preorder">EXPLORE NOW</a>
                            </div>

                            <!-- ฝั่งรูปภาพ (ล็อกความสูง 320px พอดีกับแบนเนอร์) -->
                            <div class="funko-image-container mr-5"
                                style="display: flex; justify-content: flex-end; align-items: center;">
                                <img src="{{ asset('images/panel/batman-model.png') }}"
                                    alt="Batman The Dark Knight Funko POP"
                                    style="height: 320px; width: auto; object-fit: contain; filter: drop-shadow(0 15px 20px rgba(0,0,0,0.4));">
                            </div>

                        </div>
                    </section>
                </div>

            </div>

            <a class="carousel-control-prev" href="#funkoCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>

            <a class="carousel-control-next" href="#funkoCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

  

    <section class="dc-small-banner">

        <div class="dc-small-content">

            <span>WELCOME TO DC</span>

            <h2>
                Enter The Multiverse
            </h2>

            <p>
                Discover legendary heroes, epic battles and endless stories across the DC Universe.
            </p>


            <a href="https://www.dc.com/" target="_blank">
                EXPLORE DC UNIVERSE →
            </a>


        </div>


        <div class="dc-small-image">

            <img src="{{ asset('images/logo/dc-comic.webp') }}" class="logo-dc-class" alt="Justice League">

        </div>


    </section>

    <section class="dc-small-banner infinite-banner">


        <div class="dc-small-content">


            <span>DC UNIVERSE INFINITE</span>


            <h2>
                Read The Legends
            </h2>


            <p>
                Unlock thousands of DC comics and explore
                legendary stories from heroes and villains.
            </p>



            <a href="https://www.dcuniverseinfinite.com/" target="_blank">

                JOIN NOW →

            </a>


        </div>



        <div class="dc-small-image">


            <img src="{{ asset('images/logo/dc-infinite.webp') }}" class="logo-dc-class" alt="DC Universe Infinite">


        </div>



    </section>
    <section class="popular-themes">
        <div class="section-title">
            <h2>Movies And Series</h2>
        </div>

        <div class="movie-slider">

            <button class="movie-control-prev" type="button">
                <span class="movie-control-prev-icon"></span>
            </button>


            <div class="theme-scroll" id="movieScroll">

                @foreach($movies as $movie)

                    <div class="movie-poster-card">

                        <img src="{{ asset($movie->poster) }}">

                        <div class="movie-year">
                            {{ $movie->release_year }}
                        </div>

                    </div>

                @endforeach

            </div>


            <button class="movie-control-next" type="button">
                <span class="movie-control-next-icon"></span>
            </button>

        </div>
    </section>
    <script>

        document.addEventListener("DOMContentLoaded", function () {

            const slider = document.getElementById("movieScroll");

            const prev = document.querySelector(".movie-control-prev");
            const next = document.querySelector(".movie-control-next");


            next.addEventListener("click", () => {

                slider.scrollBy({
                    left: 400,
                    behavior: "smooth"
                });

            });


            prev.addEventListener("click", () => {

                slider.scrollBy({
                    left: -400,
                    behavior: "smooth"
                });

            });


        });

    </script>

@endsection