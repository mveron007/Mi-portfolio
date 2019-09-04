@extends('home')

@section('content')

@if (isset($products->id))

  <div>

    <!-- <div class="container">
      <div class="row special-row">
        <div class="col-10">
          <img src="/storage/posters/{{ $products->image }}" class="card-img-top" alt="...">
          <div class="">
            <h1 class="card-title">{{$products->title}}</h1>
          </div>
        </div>
      </div>
    </div> -->

    <div class="card mx-auto" style="width: 18rem;">
      <img src="/storage/posters/{{ $products->image }}" class="card-img-top" alt="...">

      <div class="card-body">
        <h1 class="card-title">{{$products->title}}</h1>
        <h5>$ {{$products->price}}</h5>
        <p class="card-text">{{ $products->description }}</p>
        @if (Auth::check() == true && Auth::user()->is_admin == false)
         <a onclick="clickFunction()" href="{{url('/cart/add')}}/{{$products->id}}" class="btn btn-warning"><img src="/images/carro.png" alt=""></a>
         @else
         <a href="{{url('/products/detail')}}/{{$products->id}}" class="btn btn-warning"><img src="/images/carro.png" alt=""></a>
         <h6> <strong>Esta función no es permitida</strong> </h6>

         @endif
         <strong><p id="demo"></p></strong>
         <div class="card-footer">
           <small class="text-muted">{{$products->updated_at}}</small>
         </div>
      </div>
    </div>

  </div>

@endif

<script>
  function clickFunction() {
    document.getElementById("demo").innerHTML = "Ha sido agregado al carrito con exito";
  }


</script>


@endsection
