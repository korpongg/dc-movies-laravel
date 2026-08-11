<nav class="navbar navbar-expand-lg dc-navbar fixed-top">

    <div class="container">

        <a class="navbar-brand d-flex align-items-center" href="{{ route('welcome') }}">

            <div class="dc-logo-box">
                DC
            </div>

            <span class="brand-text">
                DC Universe
            </span>

        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainNavbar">

            <span class="navbar-toggler-icon"></span>

        </button>

        <div class="collapse navbar-collapse" id="mainNavbar">

            <ul class="navbar-nav mx-auto dc-menu">

                <li class="nav-item">
                    <a href="{{ route('welcome') }}"
                        class="nav-link {{ request()->routeIs('welcome') ? 'active' : '' }}">
                        Home
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('characters') }}"
                        class="nav-link {{ request()->routeIs('characters*') ? 'active' : '' }}">
                        Characters
                    </a>
                </li>

                <li class="nav-item">

                    <a href="{{ route('movies') }}" class="nav-link {{ request()->routeIs('movies*') ? 'active' : '' }}">
                        Movies
                    </a>
                </li>

                <li class="nav-item">

                    <a href="{{ route('locations') }}"
                        class="nav-link {{ request()->routeIs('locations*') ? 'active' : '' }}">
                        Location
                    </a>
                </li>

            </ul>

            <div class="dc-search">

                <i class="fas fa-search"></i>

                <input type="text" placeholder="Search heroes...">

            </div>

        </div>

    </div>

</nav>