@extends('layouts.app')

@section('title', 'News | La Molisana')

@section('content')
<div class="news_container">
    @foreach ($news as $item)
        <div class="news_box">
            <img src="{{$item['poster']}}" alt="news immagine">
            <div class="overlay">
                <p>{{$item['data']}}</p>
                <div class="divider"></div>
                <h3>{{$item['testo']}}</h3>
                <div class="btn">Read More</div>
            </div>
        </div>
    @endforeach
</div>
@endsection