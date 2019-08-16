@extends('home')

@section('content')
<h3>Resultado de la búsqueda: {{$search}}</h3>
@if (isset($message))
<div class='bg-warning' style='padding: 20px'>
    {{$message}}
</div>
@endif
<hr />
@if (isset($products))

  @foreach ($products as $product)
  <table class="table table-dark">
    <thead>
      <tr>
        <th scope="col"><img src="/storage/posters/{{ $product->image }}" style="width:150px;" class="card-img-top rounded-circle" alt="..."></th>
        <th scope="col">{{$product->title}}</th>
        <th scope="col">{{$product->price}}</th>
        <th scope="col"> <a href="/products/detail/{{ $product->id }}" type="button" > Ver </a> </th>
      </tr>
    </thead>
  </table>

  @endforeach

@endif
@stop
