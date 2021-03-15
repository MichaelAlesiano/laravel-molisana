@extends('layouts.app')

@section('title', 'Dettagli Prodotto | '.$dettagli['titolo'])

@section('content')
    <div class="details_container">
        <img src="{{$dettagli['src-h']}}" alt="{{$dettagli['titolo']}}">
        <img src="{{$dettagli['src-p']}}" alt="{{$dettagli['titolo']}}">

        <div class="desc_box">
            <div class="desc">
                <div class="box">
                    <i class="fas fa-info-circle"></i>
                    <p>{{$dettagli['titolo']}}</p>
                </div>
                <div class="box">
                    <i class="fas fa-clock"></i>
                    <p>Tempi di Cottura: {{$dettagli['cottura']}}</p>
                </div>
                <div class="box">
                    <i class="fas fa-balance-scale-left"></i>
                    <p>{{$dettagli['peso']}}</p>
                </div>
            </div>

            <p>{!!$dettagli['descrizione']!!}</p>
        </div>


        <img src="../images/posate-classiche.jpg" alt="Posate-Divider">
    </div>              
@endsection