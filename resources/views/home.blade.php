@extends('layouts.main-layout')


@section('content')

<h1 class="text-center text-light">FILM</h1>


    <div class="row">
        @foreach ($movies as $movie)
            <div class="col-4 card my-4 px-2">
                <div class="card-title">
                    <h2>Titolo: {{ $movie -> title }}</h2>
                </div>
                <div class="card-text">
                    <h2>Titolo Originale: {{ $movie -> original_title }}</h2>
                    <h4>Nazionalità: {{ $movie -> nationality }}</h4>
                    <h4>Data: {{ $movie -> date }}</h4>
                    <h4>Voto: {{ $movie -> vote }}</h4>
                </div>

            </div>
        @endforeach
    </div>

@endsection