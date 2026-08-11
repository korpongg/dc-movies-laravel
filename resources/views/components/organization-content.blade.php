<div class="locations-grid">

@foreach($organizations as $organization)

    <li class="p-chara_in__list-item">

        <a href="{{ route('organizations.detail', $organization->slug) }}"
           class="character-card">

            <div class="character-image">

                <img
                    src="{{ asset($organization->image) }}"
                    alt="{{ $organization->name }}">

            </div>

            <div class="character-info">

                <h3>
                    {{ $organization->name }}
                </h3>

            </div>

        </a>

    </li>

@endforeach

</div>