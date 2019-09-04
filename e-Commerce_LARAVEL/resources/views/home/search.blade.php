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
  <table class="table table-bordered">
    <thead class="thead-light">
      <tr>
        <th scope="col"><img src="/storage/posters/{{ $product->image }}" style="width:60px;" class="card-img-top" alt="..."></th>
        <th scope="col">{{$product->title}}</th>
        <th scope="col">$ {{$product->price}}</th>
        <th scope="col" class="text-center"> <a href="/products/detail/{{ $product->id }}" class="btn btn-success" type="button" > Ver </a> </th>
      </tr>
    </thead>
  </table>

  @endforeach

@endif
@stop
