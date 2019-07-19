@extends('actors.template')

@section('pageTitle','Buscar pelis')

@section('mainContent')

  <?php  foreach ($actors as $actor) :?>
    <?php  if ($actor->getFullName()==$_GET['nameActor']):?>
      {{$actor}}
    <?php endif; ?>

<?php  endforeach;?>

<form action="search.blade.php" method="get">
  {{}}
</form>
  Ingresa nombre del actor: <input type="text" name="nameActor" value="">
  <button type="submit" name="button">Send</button>
@endsection
