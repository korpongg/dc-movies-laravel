<ul class="p-chara_in__list">

    @foreach($characters as $character)

        <li class="p-chara_in__list-item" >

         <a href="{{ route('characters.detail',$character->slug) }}"
   class="character-card">


    <div class="character-image">

        <img 
        src="{{ asset($character->image) }}"
        alt="{{ $character->name }}">


    </div>


    <div class="character-info">

        <h3>
            {{ $character->name }}
        </h3>


    </div>


</a>

        </li>

    @endforeach

</ul>