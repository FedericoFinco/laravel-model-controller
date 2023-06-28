@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row flex-wrap">
        @foreach ($movies as $movie)
            <div class="col-4 p-3">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title"> image:</h2>
                        <img src="https://www.clipartmax.com/png/middle/265-2655834_work-in-progress-icon.png" alt="">
                        <h2 class="card-title">{{ $movie->title }}</h2>
                        <h3 class="card-text">{{ $movie->original_title }}</h3>
                        <h4>{{ $movie->date }}</h4>
                        <h5>Language: {{ $movie->nationality }}</h5>
                        <h5>Rating: {{ $movie->vote }}</h5>
                    </div>
                </div>
            </div>
        @endforeach
@endsection