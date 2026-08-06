<div class="lego-card">

    @if(isset($badge))
        <span class="card-badge badge-{{ $badgeClass }}">
            {{ $badge }}
        </span>
    @endif


    <div class="card-img-wrapper">
        <img src="{{ $image }}" alt="{{ $name }}">
    </div>


    <div class="card-info">

        <div class="meta-rating">
            ⭐ {{ $rating }}
        </div>


        <h3>
            {{ $name }}
        </h3>


        <div class="card-footer-action">

            <span class="insiders-tag">
                {{ $tag }}
            </span>


            <button class="btn-add-collection">
                Add to Fan Bag
            </button>


        </div>


    </div>

</div>