<ul class="p-chara_in__list">

@foreach($characters as $character)

<li class="p-chara_in__list-item">

    <a href="{{ route('characters.detail', $character->slug) }}"
       class="character-card">

        <div class="character-image">

            <img
                src="{{ asset($character->image) }}"
                alt="{{ $character->name }}"
            >

            <div class="character-gradient"></div>

            <div class="character-number">
                {{ str_pad($loop->iteration, 2, '0', STR_PAD_LEFT) }}
            </div>

            <div class="character-info">

                <span class="character-type">
                    {{ $character->alignment ?? 'DC UNIVERSE' }}
                </span>

                <h3>
                    {{ $character->name }}
                </h3>

                <span class="character-arrow">
                    VIEW PROFILE →
                </span>

            </div>

        </div>

    </a>

</li>

@endforeach

</ul>