@extends('layouts.main')

@section('page-title')
"comic"
@endsection

@section('page-content')
<section class="comic">
    <div class="comic__title">
        <div class="container">
            <div class="img">
                <img src="{{$comic['thumb']}}" alt="">
                <div class="img__typo">{{$comic['type']}}</div>
                <div class="img__gallery">view gallery</div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="comic__body">
            <div class="comic__body-sx">
                <h2 class="comic__name">{{$comic['title']}}</h2>
                <div class="comic__table">
                    <div class="comic__table-sx">
                        <div>U.S.Price: <span class="comic__price">{{$comic['price']}}</span> </div>
                        <div>AVAILABLE</div>
                    </div>
                    <div class="comic__table-dx">
                        Check availablility
                        <i class="fa-solid fa-caret-down"></i>
                    </div>
                </div>
                <div class="comic__description">{{$comic['description']}}</div>
            </div>
            <div class="comic__body-dx">
            <h5>ADVERTISEMENT</h5>
            <img src="{{asset('img/images/adv.jpg')}}" alt="">
        </div>
        </div>
    </div>
    <div class="comic__bottom">
        <div class="container">
            <div class="comic__info">
                <div class="comic__info-sx">
                    <h3 class="comic__info-title">Talent</h3>
                    <div class="comic__info-list">
                        <p>Art by:</p>
                        <div class="comic__info-body">
                            @foreach ($comic['artists'] as $arti)
                                <a href="#">{{$arti}}</a>,                            
                            @endforeach
                        </div>
                    </div>
                    <div class="comic__info-list">
                        <p>Writer by:</p>
                        <div class="comic__info-body">
                            @foreach ($comic['writers'] as $writer)
                                <a href="#">{{$writer}}</a>,                            
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="comic__info-dx">
                    <h3 class="comic__info-title">Specs</h3>
                    <div class="comic__info-list">
                        <p>Series:</p>
                        <div class="comic__info-body">
                            <a href="#">{{$comic['series']}}</a>
                        </div>
                    </div>
                    <div class="comic__info-list">
                        <p>U.S.Price:</p>
                        <div class="comic__info-body">
                            <div>{{$comic['price']}}</div>
                        </div>
                    </div>  
                    <div class="comic__info-list">
                        <p>On sale Date</p>
                        <div class="comic__info-body">
                            <div>{{$comic['sale_date']}}</div>
                        </div>
                    </div>  
                </div> 
            </div>
            <div class="comic__info_bot"></div>
    
        </div>
    </div>          
    
</section>
@dump($comic)
@endsection