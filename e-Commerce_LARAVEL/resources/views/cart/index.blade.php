@extends('layouts.app')

@section('content')

  <!-- <button type="button" class="btn bnt-info"> <a href="/">Página de inicio</a> </button> -->
  @if(Cart::count() !== 0)
  <div class="container">
    <!-- Stack the columns on mobile by making one full-width and the other half-width -->
    <div class="row justify-content-start">
      <div class="col-8">
  <table class="table table-sm table-dark">
  <thead>
    <tr>
      <th scope="col">Cantidad</th>
      <th scope="col">Producto</th>
      <th scope="col">Titulo</th>
      <th scope="col">Precio</th>
    </tr>
  </thead>

      @foreach ($cart as $cartW )
      <tbody>
        <tr>
          <th scope="row">{{$cartW->qty}}</th>
          <td><img src="/storage/posters/{{$cartW->options->img}}" width="60px;" alt=""></td>
          <td>{{$cartW->name}}</td>
          <td>${{$cartW->price}}</td>
          <td> <button type="button" class="btn btn-danger"> <a href="{{url('cart/remove')}}/{{$cartW->rowId}}"> <img src="/images/trash-can.png" alt=""> </a> </button> </td>

        </tr>
      </tbody>


      @endforeach
    </table>
  </div>

  @else
    <div class="col-8">
      <h1>Tu carrito está vacio</h1>
    </div>
  @endif
  <div class="col col-lg-4 col-sm-10">
    <div class="card">
    <div class="card-body">
      <h5 class="card-title">Resumen</h5>
      <h6><strong>Subtotal</strong>     ${{Cart::subtotal()}}</h6>
      <h6><strong>Impuestos(%)</strong>     ${{Cart::tax()}}</h6>
      <h3><strong>Total      ${{Cart::total()}}</strong></h3>
      <br><br><br>
      <!-- <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> -->
      @if (Cart::count() !== 0)
      <a href="{{url('checkout')}}" class="btn btn-warning">Checkout</a>
      @else
      <a href="#" class="btn btn-warning">Checkout</a>
      @endif
    </div>
  </div>
</div>
</div>
</div>



@endsection
