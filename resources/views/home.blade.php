@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="pasta-container py-4">
            <div class="container">
                <h2>MOVIES</h2>
                <div class="row row-cols-5 g-3">
                    @foreach ($movies as $movie)
                        <div class="col">
                            <div class="card">
                                <img src="{{ $movie->image }}" alt="">
                                <div class="card-body">
                                    <p class="card-title">{{ $movie->title }}</p>
                                    <p class="card-orig-title">{{ $movie->original_title }}</p>
                                    <p class="card-nationality">{{ $movie->nationality }}</p>
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