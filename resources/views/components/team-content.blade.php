<ul class="p-chara_in__list">

@foreach($teams as $team)

    <li class="p-chara_in__list-item">

        <a href="{{ route('teams.detail', $team->slug) }}" class="character-card">

            <div class="character-image">

           

                     <img src="{{ asset('images/teams/' . $team->image) }}">

            </div>

            <div class="character-info">

                <h3>
                    {{ $team->name }}
                </h3>

            </div>

        </a>

    </li>

@endforeach
</ul>