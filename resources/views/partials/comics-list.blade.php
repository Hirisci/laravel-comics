<section class="comic-list">
    <div class="container">
        <div class="comic-list__box">
            current series
        </div>
       <div class="comic-list__display">
        @foreach ($comics as $comic)
            <div>
                <img class="comic-list__img" src="{{$comic['thumb']}}" alt="">
                <div class="comic-list__title">{{$comic['series']}}</div>
            </div>
        @endforeach
       </div>
       <div class="btn-list">
           <button class="btn--comic-list">load more</button>
       </div>
    </div>
</section>