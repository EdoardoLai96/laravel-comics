@extends('layouts.base')

@section('pageTitle', 'Single Comic')

@section('content')
<main class="main_comic-details">
    <section class="blue_band">
    </section>
    <section class="comic-details__top">
        <div class="container_comic-details__top">
            <a href="/">
                <div style="background-image: url({{$comic['thumb']}})"> 
                    <p class="top_text">comic book</p>
                    <p class="bottom_text">view gallery</p>
                </div>
            </a>
            <h1>
                {{$comic['title']}}
            </h1> 
            <div class="price-box">
                <div class="price-box__left">
                    <span>U.S PRICE: {{$comic['price']}}</span>
                    <span>Availabe</span>
                </div>
                <div class="price-box__right">
                    <span>Check Availability</span>
                </div>
            </div>
            <div class="text-box">
                {{$comic['description']}}
            </div>
        </div>
        <div class="adv_container">
            <p>ADVERTISEMENT</p>
            <img src="/img/adv.jpg" alt="">
        </div>
    </section>

    <section class="comic-details_bottom">
        <div class="container_comic-details__bottom__left">
            
        </div>
        <div class="container_comic-details__bottom_right">

        </div>
        <div class="container_comic-details__bottom_bottom">

        </div>
    </section>
</main>

@endsection