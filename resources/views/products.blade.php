@extends('layouts.app')

@section('title', 'Prodotti | La Molisana')

@section('content')
    <div class="main_container">
        @foreach ($tipi as $k => $tipo)
            <h2>{{$k}}</h2>
            <div class="products_container">
                @foreach ($tipo as $key => $item)    
                    <div class="box_pasta">
                        <img src="{{$item['src']}}" alt="{{$item['titolo']}}">
                        <div class="overlay">
                            <i class="fas fa-plus"></i>
                            <a href="{{route('pag-details', ['id' => $key])}}">{{$item['titolo']}}</a>
                        </div>
                    </div>
                @endforeach
            </div>
        @endforeach
    </div>              
@endsection