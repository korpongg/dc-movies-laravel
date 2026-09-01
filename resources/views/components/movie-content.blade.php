<div class="movie-list">


@foreach($movies as $movie)


<a class="movie-card" href="{{ url('/movies/'.$movie->id) }}">


   <div class="movie-list-poster">


         <img
        src="{{ asset($movie->poster) }}"
        alt="{{ $movie->title }}"
        onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">

    <div class="coming-soon" style="display:none;">
        <span>COMING</span>
        <strong>SOON</strong>
    </div>


        <div class="movie-rating">

            {{ $movie->rating ?? 'G' }}

        </div>



    </div>




    <div class="movie-info">


        <h3>

            {{ $movie->title }}

        </h3>



        <div class="movie-meta">


            <span>

                {{ \Carbon\Carbon::parse($movie->release_date)->format('d M') }}

            </span>



            <span class="rate">

                {{ $movie->rating ?? 'G' }}

            </span>


        </div>



    </div>


</a>


@endforeach


</div>



<div class="character-pagination">

@if($movies->onFirstPage())

<span class="page-btn disabled">
←
</span>

@else

<a class="page-btn ajax-page"
href="{{ $movies->previousPageUrl() }}">
←
</a>

@endif



@foreach($movies->getUrlRange(1,$movies->lastPage()) as $page=>$url)

@if($page==$movies->currentPage())

<span class="page-btn active">
{{ $page }}
</span>

@else

<a class="page-btn ajax-page"
href="{{ $url }}">
{{ $page }}
</a>

@endif

@endforeach



@if($movies->hasMorePages())

<a class="page-btn ajax-page"
href="{{ $movies->nextPageUrl() }}">
→
</a>

@else

<span class="page-btn disabled">
→
</span>

@endif


</div>