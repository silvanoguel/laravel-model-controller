@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="pasta-container py-4">
            <div class="container">
                <h2>MOVIES</h2>
                <div class="row row-cols-5 g-3">
                    @foreach ($movies as $movie)
                        <div class="col">
                            <div class="card h-100">
                                <img src="{{ $movie->image }}" alt="">
                                <div class="card-body">
                                    <p class="card-title fs-3">{{ $movie->title }}</p>
                                    <p class="card-orig-title"> Original Title: {{ $movie->original_title }}</p>
                                    <p class="card-nationality">Nationality: {{ $movie->nationality }}</p>
                                    <p class="card-date">Year: {{ $movie->date }}</p>
                                    <p class="card-vote"> Vote: {{ $movie->vote }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
    
            </div>
        </div>

    </div>

@endsection