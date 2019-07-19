@extends('template')

@section('pageTitle', 'Peliculas')


@section('mainContent')

<h1>Lista de actores</h1>

<?php foreach ($actors as $actor): ?>
  <ul>
    <li> {{$actor->getFullName()}} </li>
  </ul>
<?php endforeach; ?>

@endsection
