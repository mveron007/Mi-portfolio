@extends('layouts.app')


@section('pageTitle', 'Agregar Producto')

@section('mainContent')



<!-- Scripts -->

<!-- Fonts -->
<link rel="dns-prefetch" href="//fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

<!-- Styles -->
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<link href="{{ asset('css/add-style.css') }}" rel="stylesheet">

@section('content')
<div class="mx-auto productContainer" >
  <!-- <a href="/home"> <img class="back-acount" src="/images/back.png" width="50px;" alt=""> </a> -->
  <div class="">
    <h4 class="text-center">¡Publicá un nuevo producto!</h4>
    <hr>
  </div>

  <form class="" action="/products/addProduct" method="post" enctype="multipart/form-data">
    @csrf

      <div class="form-group">
        <label for="title">Nombre del producto: </label>
        <input type="text" class="form-control" name="title" value="">
      </div>

      @if($errors->has('title'))
          <span class="invalid-feedback" role="alert">
              <strong>{{ $errors->first('title') }}</strong>
          </span>
      @endif

        <div class="form-group">
          <label for="image">Imagen del producto: </label>
          <input type="file" class="form-control-file" name="image" value="">
        </div>


      <div class="form-group">
        <label for="price">Precio: </label>
        <input type="text" class="form-control" name="price" value="">
      </div>


      <div class="form-group">
        <label for="category">Categoria: </label>
        <select class="form-control" name="category" >
          <option>Alimentos</option>
          <option>Camas y Colchonetas</option>
          <option>Ropa</option>
          <option>Collares y Chapitas</option>
          <option>Estetica e Higiene</option>

        </select>
      </div>


      <div class="form-group">
        <label for="description">Descripción: </label>
        <textarea name="description" class="form-control" rows="8" cols="80"></textarea>
      </div>
      <div class="text-center">
        <input type="submit" name="add" class="btn btn-primary my-1" style="width: 200px;" value="Agregar">

      </div>


  </form>
</div>

@endsection
