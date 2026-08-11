@extends('layouts.app')

@section('content')



    <section class="dc-banner">
        <div class="banner-wrapper">

            <div class="banner-content">

                <span class="hero-tag">
                    DC UNIVERSE
                </span>

                <h1>

                    <span>DC</span> CHARACTERS <br>

                </h1>

            </div>

            <div class="banner-image-container">

                <img src="{{ asset('images/main/dcall4.webp') }}" alt="Supergirl DC Studios">

            </div>


        </div>
    </section>
    <section class="character-page">

        <div class="character-layout">


            <aside class="character-sidebar">

                <h3>
                    Collection
                </h3>


                <ul>

                    <li class="{{ $type === 'all' ? 'active' : '' }}">
                        <a href="{{ route('characters') }}">
                            All Characters
                        </a>
                    </li>

                    <li class="{{ $type === 'hero' ? 'active' : '' }}">
                        <a href="{{ route('characters', ['type' => 'hero']) }}">
                            Heroes
                        </a>
                    </li>

                    <li class="{{ $type === 'villain' ? 'active' : '' }}">
                        <a href="{{ route('characters', ['type' => 'villain']) }}">
                            Villains
                        </a>
                    </li>

                    <li class="{{ $type === 'team' ? 'active' : '' }}">
                        <a href="{{ route('characters', ['type' => 'team']) }}">
                            Teams
                        </a>
                    </li>

                </ul>
            </aside>



            <main class="character-main">


                <div id="character-content">

                    @if($type === 'team')

                        @include('components.team-content')

                    @elseif($type === 'organization')

                        @include('components.organization-content')

                    @else

                        @include('components.character-content')

                    @endif

                </div>


            </main>


        </div>

    </section>
    <script>
        (() => {
            const container = document.getElementById("character-content");
            if (!container) return;

            async function loadPage(url, push = true) {
                try {
                    container.style.opacity = "0.5";

                    const response = await fetch(url, {
                        headers: {
                            "X-Requested-With": "XMLHttpRequest"
                        }
                    });

                    const html = await response.text();
                    container.innerHTML = html;

                    if (push) {
                        history.pushState({ isAjax: true, page: url }, "", url);
                    }
                } catch (e) {
                    console.error(e);
                    location.href = url;
                } finally {
                    container.style.opacity = "1";
                }
            }

            // Event Listener สำหรับ Click Pagination
            document.addEventListener("click", function (e) {
                const link = e.target.closest(".ajax-page");
                if (!link) return;

                e.preventDefault();
                loadPage(link.href);
            });

            // Event Listener สำหรับ Browser Back / Forward
            window.addEventListener("popstate", function (e) {
                if (!e.state || !e.state.isAjax) {
                    location.reload();
                    return;
                }

                loadPage(e.state.page, false);
            });
        })();

        // เพิ่มการสั่ง reload เมื่อดึงหน้ากลับมาจาก Cache ของ Browser
        window.addEventListener("pageshow", function (event) {
            if (event.persisted) {
                window.location.reload();
            }
        });
    </script>
@endsection