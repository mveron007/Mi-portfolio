@extends('layouts.app')

<!-- Scripts -->

<!-- Fonts -->
<link rel="dns-prefetch" href="//fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

<!-- Styles -->
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<link href="{{ asset('css/add-style.css') }}" rel="stylesheet">

@section('content')
<div class="mx-auto productContainer" >

    <h1>Crear un nuevo administrador</h1>
    <hr />
    @if (Session::has('message'))
     <div class='bg-info' style='padding: 20px'>
      {{Session::get('message')}}
     </div>
     <hr />
    @endif
    @if (Session::has('error'))
     <div class='bg-danger' style='padding: 20px'>
      {{Session::get('error')}}
     </div>
     <hr />
    @endif
    <form method="POST" action="{{url('admin/createAdmin')}}">
        {!! csrf_field() !!}

        <div class='form-group'>
            <label for="name">Nombre:</label>
            <input type="text" name="name" class="form-control" value="{{ old('name') }}" />
            <div class="text-danger">{{$errors->first('name')}}</div>
        </div>

        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" name="email" class="form-control" value="{{ old('email') }}" />
            <div class="text-danger">{{$errors->first('email')}}</div>
        </div>

        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" class="form-control" name="password">
            <div class="text-danger">{{$errors->first('password')}}</div>
        </div>

        <div class="form-group">
            <label for="password_confirmation">Confirmar Password:</label>
            <input type="password" class="form-control" name="password_confirmation">
        </div>

        <div>
            <button type="submit" class="btn btn-primary">Crear administrador</button>
        </div>
    </form>
</div>
@stop
