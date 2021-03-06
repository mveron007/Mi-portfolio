<head>


  <script src="{{ asset('js/ex.js') }}" defer></script>
  <script>

    function myToggle() {
      var x = document.getElementById("navbarNavAltMarkup");
      if (x.style.display === "none") {
        x.style.display = "block";
      } else {
        x.style.display = "none";
      }
    }
  </script>

  <link rel="stylesheet" href="{{ asset('css/header-style.css') }}">
</head>
<header style="background-image:url('../images/pets-banner_2.jpg');  ">

  <div class="pre-nav" style="position: relative; height:30%; width:100vw; background-color:white;">
    <div class="rounded-circle logo" style="display:inline-flex;" >
      <img src="/images/logo-brufood2.png" alt="">
    </div>
    <div class="phone-p" >
      <img src="/images/telefono.png" alt="">
      <p>Tenés alguna consulta?</p>
    </div>

    <div class="main-button-group">
      <!-- <button type="button" name="button"> <img src="/images/lupa.png" alt=""> </button> -->
      <button class="button-child" type="button" name="button"> <a href="/home"><img src="/images/usuario.png" alt=""></a> </button>
      <button class="button-child" type="button" name="button"> <a href="/cart"><img src="/images/carro.png" alt=""></a> </button>

    </div>
  </div>

  <nav class="navbar navbar-expand-lg navbar-light main-nav" style="background-color:rgb(238, 126, 10);">


    <button onclick="myToggle()" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active" ><a class="nav-link" href="#">Home</a></li>


          @if (Auth::check() == false)
          <li><a class="nav-item nav-link" href="/register">Registrarme</a></li>
          <li><a class="nav-item nav-link" href="/login">Iniciar Sesión</a></li>

          @else
          <li><a class="nav-item nav-link " href="/login">Mi cuenta <span class="sr-only">(current)</span></a></li>
          @endif
          <!-- <a class="nav-item nav-link" href="/products/show">Buscador</a> -->
          <div class="nav-item dropdown">
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
        </ul>
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

  <!-- <img src="/images/pets-banner_2.png" alt=""> -->



</header>
</html>
