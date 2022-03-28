@extends('layouts.base')

@section('pageTitle', 'Comics')

@section('content')
<main>

    <div class="jumbotron">
        
    </div>
    <div class="container">
        @foreach ($comics as $comic)
        <div class="card_box">
            <img src="{{$comic['thumb']}}">
            <h4 class="card_title">{{$comic['title']}}</h4>
        </div>
        @endforeach
        <div class="load_more top">
            CURRENT SERIES
        </div>
        
    </div>
    <div class="load_more">
        LOAD MORE
    </div>
</main>

@endsection