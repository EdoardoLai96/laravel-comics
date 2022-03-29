@extends('layouts.base')

@section('pageTitle', 'Comics')

@section('content')
<main class="main_home">

    <div class="container">
        @foreach ($comics as $key => $comic)
        <a class="" href="{{route('comic_details', ['comic_id' => $key])}}">
            <div class="card_box">
                <img src="{{$comic['thumb']}}">
                    <h4 class="card_title">{{$comic['title']}}</h4>
                </div>
        </a>
        @endforeach
        <div class="load_more top">
            CURRENT SERIES
        </div>
        
    </div>
    <div class="load_more">
        LOAD MORE
    </div>
</main class="main_home">

@endsection