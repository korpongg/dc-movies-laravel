<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">

    <url>
        <loc>{{ url('/') }}</loc>
    </url>

    <url>
        <loc>{{ url('/characters') }}</loc>
    </url>

    @foreach ($characters as $character)
        <url>
            <loc>{{ url('/characters/' . $character->slug) }}</loc>
        </url>
    @endforeach

    <url>
        <loc>{{ url('/movies') }}</loc>
    </url>

    @foreach ($movies as $movie)
        <url>
            <loc>{{ url('/movies/' . $movie->id) }}</loc>
        </url>
    @endforeach

    <url>
        <loc>{{ url('/locations') }}</loc>
    </url>

    @foreach ($locations as $location)
        <url>
            <loc>{{ url('/locations/' . $location->slug) }}</loc>
        </url>
    @endforeach

    <url>
        <loc>{{ url('/about') }}</loc>
    </url>

</urlset>