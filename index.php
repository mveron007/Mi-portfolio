<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <title>Marcos Verón</title>
  </head>
  <body>
    <header class="main-header">
      <nav class="main-nav">
        <ul>
          <li> <a href="#" class="indice-page"> <i class=""></i> <span>Inicio</span> </a> </li>
          <li> <a href="#professional" class="indice-page"> <i class=""></i> <span>Marcos Verón</span> </a> </li>
          <li> <a href="#skills" class="indice-page"> <i class=""></i> <span>Habilidades</span> </a> </li>
          <li> <a href="#former" class="indice-page"> <i class=""></i> <span>Formación</span> </a> </li>
          <li> <a href="#contact" class="indice-page"> <i class=""></i> <span>Contacto</span> </a> </li>
        </ul>
      </nav>

    </header>

    <?php require_once "carousel.php" ?>

    <div class="profile-photo">
      <img src="images/profile.jpg" alt="foto-perfil">
    </div>

    <h1 class="professional-pf" id="professional">Extracto Profesional</h1>
    <p class="main-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

    <br><br><br><br><br>

    <h1 class="professional-pf-skill" id="skills">Habilidades <i> <img src="images/brain-skill.png"> </i> </h1>

    <div class="icon-abilities">
      <ul>
        <li class="list-icon"> <img src="images/htmlv2.svg">  <article> <h4>HTML</h4> </article></li>
        <li class="list-icon"> <img src="images/css-v2.svg" > <article> <h4>CSS</h4> </article> </li>
        <li class="list-icon"> <img src="images/phpv2.svg" >  <article> <h4>PHP</h4> </article> </li>
        <li class="list-icon"> <img src="images/pyv2.svg">    <article> <h4>PYTHON</h4> </article>  </li>
      </ul>

    </div>
    <br><br><br><br><br>

    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

    <?php require_once "form.php" ?>
    <!-- <div class="contacto">
      <h1 class="professional-pf-skill" id="contact">Contacto</h1>
      <p>Dejame tu mensaje para comunicarte conmigo</p>

      <form class="contact-form" action="index.php" method="post">
        <div class="contact-control">
          <label>Nombre</label>
          <input type="text" name="name" id="name">
        </div>
        <div class="contact-control">
          <label>Email</label>
          <input type="text" name="email" id="email">
        </div>
        <div class="contact-control">
          <label>Teléfono</label>
          <input type="tel" name="phone" id="phone">
        </div>
        <div class="contact-control">
          <label>Mensaje</label>
          <textarea name="message" id="message"></textarea>
        </div>
        <button type="submit" name="button">Enviar <span class="ion-paper-airplane"></span> </button>

      </form>

    </div> -->
    <footer>
      <?php include "footer.php" ?>
    </footer>




    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">  </script>

  </body>
</html>
