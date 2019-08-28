<head>
  <script src="{{ asset('js/ex.js') }}" defer></script>

  <link rel="stylesheet" href="{{ asset('css/header-style.css') }}">
</head>
<header style="background-image:url('../images/pets-banner_2.jpg'); height:500px; background-repeat:no-repeat; background-size:100vw; ">

  <div class="pre-nav" style="position: relative; height:30%; width:100vw; background-color:white;">
    <div class="rounded-circle" style="display:inline-flex;" >
      <img style="width:120px; margin:20px;" src="/images/logo-brufood2.png" alt="">
    </div>
    <div class="phone-p" style="display:inline-flex; position: absolute; left:45%; top:35%">
      <img src="/images/telefono.png" alt="">
      <p>Tenés alguna consulta?</p>
    </div>

    <div class="main-button-group" style="display:inline-flex; position: absolute; left:80%; top:35%">
      <button type="button" name="button"> <img src="/images/lupa.png" alt=""> </button>
      <button type="button" name="button"> <a href="/home"><img src="/images/usuario.png" alt=""></a> </button>
      <button type="button" name="button"> <a href="/cart"><img src="/images/carro.png" alt=""></a> </button>

    </div>
  </div>

  <nav class="navbar navbar-expand-lg navbar-light main-nav" style="background-color:rgb(238, 126, 10);">

    <a class="navbar-brand" href="#">Home</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">

        @if (Auth::check() == false)
        <a class="nav-item nav-link" href="/register">Registrarme</a>
        <a class="nav-item nav-link" href="/login">Iniciar Sesión</a>

        @else
        <a class="nav-item nav-link active" href="/login">Mi cuenta <span class="sr-only">(current)</span></a>
        @endif
        <!-- <a class="nav-item nav-link" href="/products/show">Buscador</a> -->
        <div class="dropdown">
          <li class="nav-item nav-link dropbtn"> Colores </li>
          <div class="dropdown-content">
            <button type="button" class="dropdown-item rounded-circle"  id="button1" style="background-color: rgb(196, 35, 199); width:30px; height:30px;" ></button>
              <div class="dropdown-divider"></div>
              <button type="button" class="dropdown-item rounded-circle"  id="button2" style="background-color: rgb(155, 14, 204); width:30px; height:30px;" ></button>
              <div class="dropdown-divider"></div>
              <button type="button" class="dropdown-item rounded-circle"  id="button3" style="background-color: rgb(14, 141, 204); width:30px; height:30px;" ></button>
              <!-- <div class="dropdown-divider"></div>
              <button type="button" class="dropdown-item rounded-circle"  id="button4" style="background-color: #4bd1b6;width:30px; height:30px;" ></button> -->
          </div>
        </div>
      </div>

      <!-- <div class="btn-group dropright">
        <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropright
        </button>
        <div class="dropdown-menu">
          <button type="button" class="dropdown-item rounded-pill"  id="button1" style="background-color: rgb(196, 35, 199);" >Pink</button>
          <div class="dropdown-divider"></div>
          <button type="button" class="dropdown-item rounded-pill"  id="button2" style="background-color: rgb(155, 14, 204);" >Purple</button>
          <div class="dropdown-divider"></div>
          <button type="button" class="dropdown-item rounded-pill"  id="button3" style="background-color: rgb(14, 141, 204);" >Light Blue</button>
          <div class="dropdown-divider"></div>
          <button type="button" class="dropdown-item rounded-pill"  id="button4" style="background-color: #4bd1b6;" >Light Green</button>
        </div>
      </div> -->

    </div>
    <form class="form-inline my-2 my-lg-0" role="search" action="{{url('home/searchredirect')}}">
     <!-- <div class="form-group"> -->
      <input type="text" class="form-control mr-sm-2" name='search' placeholder="Buscar ..." />
     <!-- </div> -->
     <button type="submit" class="btn btn-primary my-2 my-sm-0">Buscar</button>
    </form>
  </nav>



</header>
</html>
