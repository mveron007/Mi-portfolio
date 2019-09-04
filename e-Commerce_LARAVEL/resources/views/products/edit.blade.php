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

<!-- <link rel="stylesheet" href="{{ asset('css/styles.css') }}"> -->


@section('content')
<div class="mx-auto productContainer" >
  <div class="">
    <h4 class="text-center">Corrijamos algunas cosas</h4>
    <hr>
  </div>
  <form action="/products/{{ $productos->id }}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PUT')

      <div class="form-group">
        <label for="title">Nombre del producto: </label>
        <input type="text" class="form-control" name="title" value="{{ $productos->title }}">
      </div>

      @if($errors->has('title'))
          <span class="invalid-feedback" role="alert">
              <strong>{{ $errors->first('title') }}</strong>
          </span>
      @endif

        <div class="form-group">
          <label for="image">Imagen del producto: </label>
          <input type="file" class="form-control-file" name="image" value="{{ $productos->image }}">
        </div>


      <div class="form-group">
        <label for="price">Precio: </label>
        <input type="text" class="form-control" name="price" value="{{ $productos->price }}">
      </div>

      <div class="form-group">
        <label for="category">Categoria: </label>
        <select class="form-control" name="category" value="{{ $productos->category }}">
          <option>Cocina</option>
          <option>Oficina</option>
        </select>
      </div>


      <div class="form-group">
        <label for="description">Descripción: </label>
        <textarea name="description" class="form-control" rows="8" cols="80">{{ $productos->description }} </textarea>
      </div>

      <div class="text-center">
        <input type="submit" name="add" class="btn btn-primary my-1 " style="width: 200px;" value="Actualizar">
      </div>  

  </form>
</div>

@endsection
