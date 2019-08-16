@extends('home')

@section('content')

@if (isset($products->id))


  <div>
    <div class="card" style="width: 18rem;">
      <img src="/storage/posters/{{ $products->image }}" class="card-img-top" alt="...">

      <div class="card-body">
        <h1 class="card-title">{{$products->title}}</h1>
        <h5>$ {{$products->price}}</h5>
        <p class="card-text">{{ $products->description }}</p>
         <a href="{{url('/cart/add')}}/{{$products->id}}" class="btn btn-primary"><img src="/images/carro.png" alt=""></a>
         <div class="card-footer">
           <small class="text-muted">{{$products->updated_at}}</small>
         </div>
      </div>
    </div>

  </div>

@endif



@endsection
