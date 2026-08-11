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

                    <a href="{{ route('movies') }}"
                        class="nav-link {{ request()->routeIs('movies*') ? 'active' : '' }}">
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

            <div class="dc-search-wrapper">

                <div class="dc-search">

                    <i class="fas fa-search"></i>

                    <input type="text" id="globalSearch" placeholder="Search heroes, movies..." autocomplete="off">

                </div>

                <div id="searchDropdown" class="search-dropdown">
                </div>

            </div>

        </div>

    </div>

</nav>

<script>

  const searchInput = document.getElementById('globalSearch');
const searchDropdown = document.getElementById('searchDropdown');

searchInput.addEventListener('input', function () {

    const keyword = this.value.trim();

    if (keyword.length === 0) {

        searchDropdown.innerHTML = '';
        searchDropdown.style.display = 'none';

        return;
    }

    fetch('/api/search?q=' + encodeURIComponent(keyword))

        .then(response => response.json())

        .then(data => {

            console.log(data);

            searchDropdown.innerHTML = '';

            const hasResults =
                data.characters.length > 0 ||
                data.movies.length > 0 ||
                data.locations.length > 0;


            // ไม่มีผลลัพธ์
            if (!hasResults) {

                searchDropdown.innerHTML = `
                    <div class="search-no-result">
                        No results found
                    </div>
                `;

                searchDropdown.style.display = 'block';

                return;
            }


            // =========================
            // CHARACTERS
            // =========================

            data.characters.forEach(character => {

                const item = document.createElement('a');

                item.href = `/characters/${character.slug}`;

                item.classList.add('search-result');

                item.innerHTML = `
                    <div class="search-result-title">
                        ${character.name}
                    </div>

                    <div class="search-result-meta">
                        ${character.real_name ?? 'Character'} · Character
                    </div>
                `;

                searchDropdown.appendChild(item);

            });


            // =========================
            // MOVIES
            // =========================

            data.movies.forEach(movie => {

                const item = document.createElement('a');

                item.href = `/movies/${movie.id}`;

                item.classList.add('search-result');

                item.innerHTML = `
                    <div class="search-result-title">
                        ${movie.title}
                    </div>

                    <div class="search-result-meta">
                        ${movie.universe ?? ''} · ${movie.type ?? 'Movie'}
                    </div>
                `;

                searchDropdown.appendChild(item);

            });


            // =========================
            // LOCATIONS
            // =========================

            data.locations.forEach(location => {

                const item = document.createElement('a');

                item.href = `/locations/${location.slug}`;

                item.classList.add('search-result');

                item.innerHTML = `
                    <div class="search-result-title">
                        ${location.name}
                    </div>

                    <div class="search-result-meta">
                        Location
                    </div>
                `;

                searchDropdown.appendChild(item);

            });


            searchDropdown.style.display = 'block';

        })

        .catch(error => {

            console.error('Search Error:', error);

        });

});
let selectedIndex = -1;


// =========================
// KEYBOARD NAVIGATION
// =========================

searchInput.addEventListener('keydown', function (event) {

    const items = searchDropdown.querySelectorAll('.search-result');

    if (items.length === 0) {
        return;
    }


    // Arrow Down
    if (event.key === 'ArrowDown') {

        event.preventDefault();

        selectedIndex++;

        if (selectedIndex >= items.length) {
            selectedIndex = 0;
        }

        updateSelectedItem(items);

    }


    // Arrow Up
    else if (event.key === 'ArrowUp') {

        event.preventDefault();

        selectedIndex--;

        if (selectedIndex < 0) {
            selectedIndex = items.length - 1;
        }

        updateSelectedItem(items);

    }


    // Enter
    else if (event.key === 'Enter') {

        event.preventDefault();

        if (selectedIndex >= 0) {
            items[selectedIndex].click();
        }

    }


    // Escape
    else if (event.key === 'Escape') {

        searchDropdown.innerHTML = '';
        searchDropdown.style.display = 'none';

        selectedIndex = -1;

    }

});


// =========================
// HIGHLIGHT ITEM
// =========================

function updateSelectedItem(items) {

    items.forEach(item => {
        item.classList.remove('search-selected');
    });

    if (selectedIndex >= 0) {

        items[selectedIndex].classList.add('search-selected');

        items[selectedIndex].scrollIntoView({
            block: 'nearest'
        });

    }

}

document.addEventListener('click', function (event) {

    if (!event.target.closest('.dc-search-wrapper')) {

        searchDropdown.innerHTML = '';
        searchDropdown.style.display = 'none';

        selectedIndex = -1;
    }

});
</script>