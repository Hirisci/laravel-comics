<section class="comic-list">
    <div class="container">
        <div class="comic-list__box">
            current series
        </div>
       <div class="comic-list__display">
        @foreach ($comics as $idx => $comic)
            <a href="{{route('comics',['id'=> $idx])}}">
                    <img class="comic-list__img" src="{{$comic['thumb']}}" alt="">
                    <div class="comic-list__title">{{$comic['series']}}</div>
            </a>
        @endforeach
       </div>
       <div class="btn-list">
           <button class="btn--comic-list">load more</button>
       </div>
    </div>
</section>