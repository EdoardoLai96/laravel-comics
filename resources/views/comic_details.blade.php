@extends('layouts.base')

@section('pageTitle', 'Single Comic')

@section('content')
<main class="main_comic-details">
    <section class="comic-details__top">
        <div class="container_comic-details">
            <h1>
                {{$comic['title']}}
            </h1> 
            <div class="price-box">
                <div class="price-box__left">
                    <span>U.S PRICE:{{$comic['price']}}</span>
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
</main>

@endsection