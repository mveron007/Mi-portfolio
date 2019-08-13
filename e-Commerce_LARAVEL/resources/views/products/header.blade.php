<head>
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
      <button type="button" name="button"> <img src="/images/usuario.png" alt=""> </button>
      <button type="button" name="button"> <img src="/images/carro.png" alt=""> </button>

    </div>
  </div>

  <nav class="navbar navbar-expand-lg navbar-light" style="background-color:rgb(238, 126, 10);">

    <a class="navbar-brand" href="#">Home</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-item nav-link active" href="/login">Mi cuenta <span class="sr-only">(current)</span></a>
        <a class="nav-item nav-link" href="/register">Registrarme</a>
        <a class="nav-item nav-link" href="/products/show">Buscador</a>
      </div>
    </div>
  </nav>



</header>
</html>
