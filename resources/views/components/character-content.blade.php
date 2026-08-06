@include('components.character-list')

<div class="character-pagination">

    @if($characters->onFirstPage())

        <span class="page-btn disabled">
            ←
        </span>

    @else

        <a class="page-btn ajax-page"
           href="{{ $characters->previousPageUrl() }}">
            ←
        </a>

    @endif


    @foreach($characters->getUrlRange(1, $characters->lastPage()) as $page => $url)

        @if($page == $characters->currentPage())

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


    @if($characters->hasMorePages())

        <a class="page-btn ajax-page"
           href="{{ $characters->nextPageUrl() }}">
            →
        </a>

    @else

        <span class="page-btn disabled">
            →
        </span>

    @endif

</div>
