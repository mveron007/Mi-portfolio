@extends('layouts.app')

@section('content')

  <!-- <button type="button" class="btn bnt-info"> <a href="/">Página de inicio</a> </button> -->

  <div class="container">
      <h1 style="color:rgb(204, 55, 35);">Tu compra ha sido exitosa!</h1>

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

      @foreach ($data as $dataW )
      <tbody>
        <tr>
          <th scope="row">{{$dataW->qty}}</th>
          <td><img src="/storage/posters/{{$dataW->options->img}}" width="60px;" alt=""></td>
          <td>{{$dataW->name}}</td>
          <td>${{$dataW->price}}</td>

        </tr>
      </tbody>


      @endforeach
    </table>
  </div>

  <!--  -->
  <div class="col col-lg-4 col-sm-10">
    <div class="card">
    <div class="card-body">
      <h5 class="card-title">Resumen</h5>
      <h6><strong>Subtotal</strong>     ${{Cart::subtotal()}}</h6>
      <h6><strong>Impuestos(%)</strong>     ${{Cart::tax()}}</h6>
      <h3><strong>Total      ${{Cart::total()}}</strong></h3>
      <br><br><br>

    </div>
  </div>
</div>
</div>
</div>



@endsection
