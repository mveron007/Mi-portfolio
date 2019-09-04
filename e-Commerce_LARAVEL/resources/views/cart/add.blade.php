@extends('layouts.app')

@section('content')

<div class="card mx-auto" style="width: 18rem;">
  <img src="/storage/posters/{{ $pro->image }}" class="card-img-top" alt="...">

  <div class="card-body">
    <h1 class="card-title">{{$pro->title}}</h1>
    <h5>$ {{$pro->price}}</h5>
    <p class="card-text">{{ $pro->description }}</p>
    @if (Auth::check() == true && Auth::user()->is_admin == false)
     <a onclick="clickFunction()" href="{{url('/cart/add')}}/{{$pro->id}}" class="btn btn-warning"><img src="/images/carro.png" alt=""></a>
     @else
     <a href="{{url('/products/detail')}}/{{$pro->id}}" class="btn btn-warning"><img src="/images/carro.png" alt=""></a>
     <h6> <strong>Esta función no es permitida</strong> </h6>

     @endif
    <h6 class="special-h6" style="color:red;"><strong>Ha sido agregado al carrito exitosamente</strong></h6>
     <div class="card-footer">
       <small class="text-muted">{{$pro->updated_at}}</small>
     </div>
  </div>
</div>
@endsection
