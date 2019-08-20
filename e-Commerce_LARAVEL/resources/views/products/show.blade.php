<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
      <meta charset="utf-8">
      <title></title>
      <!-- Scripts -->
      <script src="{{ asset('js/app.js') }}" defer></script>

      <!-- Fonts -->
      <link rel="dns-prefetch" href="//fonts.gstatic.com">
      <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

      <!-- Styles -->
      <link href="{{ asset('css/app.css') }}" rel="stylesheet">
      <link rel="stylesheet" href="/css/style.css">
      <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
      <link rel="stylesheet" href="{{ asset('css/header-style.css') }}">
      <link rel="stylesheet" href="{{ asset('css/edit-style.css') }}">

    <title></title>
  </head>
  <body>
    <a href="/"> <img class="back-acount" src="/images/back.png" width="50px;" alt=""> </a>

        @foreach ($productos as $producto)

              <div class="card products" >

                <div class="edit-link">

                  <a href="/products/edit/{{$producto->id}}"> <img  src="/images/edit.png" width="50px;" > </a>

                </div>

                <img src="/storage/posters/{{ $producto->image }}" class="card-img-top" />
                <div class="card-body">
                  <h1 class="card-title">{{$producto->title}}</h1>
                  <h5>$ {{$producto->price}}</h5>
                  <p class="card-text">{{$producto->description}}</p>
                </div>
                <div class="mx-auto">
                  <button type="button" class="btn btn-info" style="width: 200px;">Info</button>

                  <!-- Poner lógica de si Auth==al que lo publicó puede borrar -->
                  <form action="/products/show/{{ $producto->id }}" method="POST" >
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}

                    <button type="submit" class="btn btn-danger" style="width: 200px;">Delete</button>
                  </form>

                </div>
                <div class="card-footer">
                  <small class="text-muted">categoria</small>
                </div>
              </div>

        @endforeach

        {{ $productos->links() }}

        <!-- <li><a href="#">Agnes</a></li>

        <li><a href="#">Billy</a></li>
        <li><a href="#">Bob</a></li>

        <li><a href="#">Calvin</a></li>
        <li><a href="#">Christina</a></li>
        <li><a href="#">Cindy</a></li> -->

  </body>
  <script src="{{ asset('js/search.js') }}" defer></script>
  <!-- <script src="resources/js/search.js"></script> -->

</html>
