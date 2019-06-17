<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles-form.css">
    <title></title>
  </head>
  <body>

    <div class="contacto">
      <h1 class="professional-pf-skill" id="contact">Contacto</h1>
      <p>Dejame tu mensaje para comunicarte conmigo</p>

      <form class="contact-form" action="index.php" method="post">
        <div class="contact-control">
          <input type="text" name="name" id="name" placeholder="Nombre">
        </div>
        <div class="contact-control">
          <input type="text" name="email" id="email" placeholder="Email">
        </div>
        <div class="contact-control">
          <input type="tel" name="phone" id="phone" placeholder="Teléfono">
        </div>
        <div class="contact-control-msg">
          <textarea style="border-radius:10px; width:90%; height:125px;" name="message" id="message" placeholder="Mensaje" > </textarea>
        </div>
        <button type="submit" name="button">Enviar <span class="ion-paper-airplane"></span> </button>

      </form>

    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css"> </script>

  </body>
</html>
