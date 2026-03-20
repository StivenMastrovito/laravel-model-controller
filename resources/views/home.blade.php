@extends('layouts.DefaultLayout')

@section('content')
    <h1>Scegli un film</h1>
    <div class="grid">
            @foreach ($movies as $movie)
            <x-movie-card :movie="$movie" />
            @endforeach
    </div>
@endsection