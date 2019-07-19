<!DOCTYPE html>
<html lang="en" dir="ltr">
  <!-- <head>
    <title></title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style-header.css">

  </head> -->
<?php require_once 'vendor.php' ?>

  <body>

      <header class="main-header">
        <!-- background-image:url('../images/coder.jpg'); -->
        <nav class="main-nav">
          <div class="pos-f-t">
              <div class="collapse" id="navbarToggleExternalContent">
                <div class="bg-outline-light p-4">
                  <!-- <h5 class="text-white h4">Collapsed content</h5>
                  <span class="text-muted">Toggleable via the navbar brand.</span> -->

                  <ul class="nav justify-content-center">
                    <li class="nav-item">
                      <a class="nav-link active" href="#">Inicio</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#professional">Marcos Verón</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#skills">Habilidades</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#contact">Contacto</a>
                    </li>

                  </ul>

                </div>
              </div>
              <nav class="navbar navbar-light bg-outline-light">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <ul class="nav">

                    <li class="nav-item"> <a class="nav-link" href="https://www.linkedin.com/in/marcos-dami%C3%A1n-ver%C3%B3n-21814b182/"> <img style="width:80px;" class="btn-sm" src="images/Github.png"> </a> </li>
                    <li class="nav-item"> <a class="nav-link" href="https://www.linkedin.com/in/marcos-damián-verón-21814b182"> <img style="width:80px;" class="btn-sm" src="images/iconfinder_linkedin.png"> </a> </li>
                    <li class="nav-item"> <a class="nav-link" href="#"> <img style="width:80px;" class="btn-sm" src="images/iconfinder_whatsapp.png"> </a> </li>

                </ul>

              </nav>
            </div>

        </nav>

        <div class="h1-special">

          <h1 class="display-4">Marcos <strong>Verón</strong> </h1>
          <p class="wellcoming">Hi, thanks for visit me.</p>
        </div>

      </header>

      <!-- <div class="card mb-3" style="max-width: 540px;">
        <div class="row no-gutters">
          <div class="col-md-4">
            <img src="images/profile.jpg" class="card-img rounded-circle" alt="...">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
          </div>
        </div>
      </div> -->

      <div class="card mb-3 text-center presentation" style="max-width: 700px;">

        <div class="row no-gutters">
          <div class="col-md-4">
            <img src="images/profile-2.png" class="card-img rounded-circle" style="padding:10px;" alt="...">
          </div>
          <div class="col-md-8">
              <span class="text-card" style="color:black;">Hello, I'm</span>
              <h2 class="card-title">Marcos Verón</h2>
              <small> <strong> Técnico Electromecánico | Desarrollador Web</strong></small>
              <p class="card-text">
                Técnico Electromecánico, con manejo de tornos convencionales y CNC. Manejo experimentado en programas de
                diseño industrial (uso de impresora 3D). También conocimientos en automatización Neumática y PLC. Dominio
                avanzado de paquete office, con conocimientos en lenguajes HTML, CSS y PHP habiendo utilizado tanto Python
                como C++.Uso de repositorios en Github. Habla inglesa, comprensión de textos y diálogo.
              </p>

            </div>
          </div>
          <p>
            <a class="btn btn-primary" data-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Formación</a>

          </p>
          <div class="row">
            <div class="col">
              <div class="collapse multi-collapse" id="multiCollapseExample1">
                <div class="card card-body">
                  <ul>
                    <!-- <li><i class="material-icons">add</i>Técnico Electromecánico</li> -->

                    <li>Técnico Electromecánico</li>
                    <li>Lengua Inglesa</li>
                    <li>Instalador de cámaras de videovigilancia</li>
                    <li>Estudiante de Bioingeniería</li>
                    <li>Estudiante de Programación Full Stack</li>

                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <br><br><br>
      <h1 class="abilities">Skills</h1>

      <?php require_once 'carousel.php'; ?>

      <?php require_once 'form.php'; ?>

      <?php require_once 'footer.php'; ?>




      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

      <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script> -->
      <script src="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">  </script>


  </body>
</html>
