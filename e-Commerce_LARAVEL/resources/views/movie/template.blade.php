@extends('movie.index')

@section('pageTitle', 'Movies')


@section('mainContent')

<ul>
  @foreach ($movies as $movie)
    <li>{{$movie->titulo}}</li>
  @endforeach
</ul>
@endsection
