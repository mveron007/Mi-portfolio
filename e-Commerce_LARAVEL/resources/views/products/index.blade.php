<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <!-- Scripts -->
    <!-- <script src="{{ asset('js/app.js') }}" defer></script> -->
    <!-- <script src="{{ asset('js/index.js') }}" defer></script> -->
    <!-- <script>


      window.addEventListener('load', function () {
        var itemSection = document.querySelector('#categoriesV');

        function lessWidth() {
          if (window.matchMedia("(max-width: 700px)").matches) {
            itemSection.classList.remove('container-card');
            itemSection.classList.add('vertical');
            itemSection.classList.add('slider');

          }else {
            itemSection.classList.add('container-card');
            itemSection.classList.remove('vertical');
            itemSection.classList.remove('slider');
          }
        }
      });


    </script> -->
    <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
    <script src="./slick/slick.js" type="text/javascript" charset="utf-8"></script>
    <script type="text/javascript">
      $(document).on('ready', function() {

        $(".lazy").slick({
        lazyLoad: 'ondemand', // ondemand progressive anticipated
        infinite: true,
        variableWidth: true
      });
      });
    </script>

    <script>
        function chatButton() {
            var chat = document.getElementById("chatOne");
            if (chat.style.display === "none") {
              chat.style.display = "block";
            } else {
              chat.style.display = "none";
            }
        }

    </script>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/header-style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/item-style.css') }}">


  </head>
  @include('products.header')

  <body >

      <section id="categoriesV" class="container-card">
      <!-- <div class="container-card " style="display: flex; flex-wrap: wrap;"> -->
        <!-- <div class="card" style="background-color:rgb(42, 150, 238); width:300px; height:300px;"> -->
        <div class="card card-1" style="background-image:url('../images/feed-box.png');
        background-size: contain; background-repeat: no-repeat; background-color: rgb(42, 150, 238); background-position: bottom;
        width:300px; height:330px;">

        <!-- Prueba -->
        <div class="dropdown">
          <button class="dropbtn"> <h3>Alimentos</h3> </button>
          <div class="dropdown-content">
            <a href="#">Link 1</a>
            <a href="#">Link 2</a>
            <a href="#">Link 3</a>
          </div>
        </div>
        <!-- Fin de prueba -->
        </div>

        <div class="card card-2" style="background-color:rgb(249, 196, 9); background-image:url('../images/paw-bed.png');
        background-repeat: no-repeat; background-position: bottom;
        width:500px; height:200px;">
        <!-- <h1 > <a  class="nav-link dropdown-toggle menu-item">Higiene</a> </h1> -->

        <!-- Prueba -->
        <div class="dropdown">
          <button class="dropbtn"> <h3>Camas y colchonetas</h3> </button>
          <div class="dropdown-content">
            <a href="#">Link 1</a>
            <a href="#">Link 2</a>
            <a href="#">Link 3</a>
          </div>
        </div>
        <!-- Fin de prueba -->

        </div>

        <div class="card card-3" style="background-color:rgb(41, 38, 43); width:400px; height:250px; background-image:url('../images/box-clothes.png');
        background-repeat: no-repeat; background-position: bottom;">
        <!-- Prueba -->
        <div class="dropdown">
          <button class="dropbtn"> <h3>Ropa</h3> </button>
          <div class="dropdown-content">
            <a href="#">Link 1</a>
            <a href="#">Link 2</a>
            <a href="#">Link 3</a>
          </div>
        </div>
        <!-- Fin de prueba -->
        </div>

        <div class="card card-4">
          <!-- Prueba -->
          <div class="dropdown">
            <button class="dropbtn"> <h3>Collares y chapitas</h3> </button>
            <div class="dropdown-content">
              <a href="#">Link 1</a>
              <a href="#">Link 2</a>
              <a href="#">Link 3</a>
            </div>
          </div>
          <!-- Fin de prueba -->
        </div>

        <div class="card card-5">
          <!-- Prueba -->
          <div class="dropdown">
            <button class="dropbtn"> <h3>Estética e higiene</h3> </button>
            <div class="dropdown-content">
              <a href="#">Link 1</a>
              <a href="#">Link 2</a>
              <a href="#">Link 3</a>
            </div>
          </div>
          <!-- Fin de prueba -->
        </div>

        </section>

        <section class="lazy slider my-items" data-sizes="50vw">
          <!-- <div >
            <div class="rounded-circle" style="background-color:rgb(19, 129, 219); width:100px; ">
              <a href="#"><img class="rounded-circle " src="/images/alimentos-para-mascotas.png" alt=""></a>
            </div>
          </div> -->
          <div>

          <div class="card card-1" style="background-image:url('../images/feed-box.png');
          background-size: contain; background-repeat: no-repeat; background-color: rgb(42, 150, 238); background-position: bottom;
          width:300px; height:330px;">

          <!-- Prueba -->
          <div class="dropdown">
            <button class="dropbtn"> <h3>Alimentos</h3> </button>
            <div class="dropdown-content">
              <a href="#">Link 1</a>
              <a href="#">Link 2</a>
              <a href="#">Link 3</a>
            </div>
          </div>
          <!-- Fin de prueba -->
          </div>
      </div>

        <div>

          <div class="card card-1" style="background-image:url('../images/paw-bed.png');
          background-size: contain; background-repeat: no-repeat; background-color: rgb(249, 196, 9); background-position: bottom;
          width:300px; height:330px;">

          <!-- Prueba -->
          <div class="dropdown">
            <button class="dropbtn"> <h3>Camas</h3> </button>
            <div class="dropdown-content">
              <a href="#">Link 1</a>
              <a href="#">Link 2</a>
              <a href="#">Link 3</a>
            </div>
          </div>
          <!-- Fin de prueba -->
          </div>
        </div>

        <div>

         <div class="card card-1" style="background-image:url('../images/box-clothes.png');
          background-size: contain; background-repeat: no-repeat; background-color: rgb(41, 38, 43); background-position: bottom;
          width:300px; height:330px;">

          <!-- Prueba -->
          <div class="dropdown">
            <button class="dropbtn"> <h3>Ropa</h3> </button>
            <div class="dropdown-content">
              <a href="#">Link 1</a>
              <a href="#">Link 2</a>
              <a href="#">Link 3</a>
            </div>
          </div>
          <!-- Fin de prueba -->
          </div>
        </div>


        <div>

         <div class="card card-1" style="background-image:url('../images/collar.png');
          background-size: contain; background-repeat: no-repeat; background-color: rgb(238, 126, 10); background-position: bottom;
          width:300px; height:330px;">

          <!-- Prueba -->
          <div class="dropdown">
            <button class="dropbtn"> <h3>Collares</h3> </button>
            <div class="dropdown-content">
              <a href="#">Link 1</a>
              <a href="#">Link 2</a>
              <a href="#">Link 3</a>
            </div>
          </div>
          <!-- Fin de prueba -->
          </div>
        </div>

        <div>

         <div class="card card-1" style="background-image:url('../images/wash-dog.png');
          background-size: contain; background-repeat: no-repeat; background-color: rgb(42, 150, 238); background-position: bottom;
          width:300px; height:330px;">
          <!-- Prueba -->
          <div class="dropdown">
            <button class="dropbtn"> <h3>Higiene</h3> </button>
            <div class="dropdown-content">
              <a href="#">Link 1</a>
              <a href="#">Link 2</a>
              <a href="#">Link 3</a>
            </div>
          </div>
          <!-- Fin de prueba -->
          </div>
        </div>


        </section>

      <!-- </div> -->

      @include('products.product-carousel')

    <br><br><br>
    <!-- <div class="dropup my-bot" style="position:fixed; left: 75%; bottom:0%; z-index:10;"> -->
    <div class="dropup my-bot" style="position:fixed; left: 75%; bottom:0%; z-index:10;">

      <button class="dropbtn2"> <img src="/images/bocadillo.png" alt=""> <strong class="chat-phrase">Chateá con nosotros</strong></button>
      <div class="dropup-content">
        <iframe width="350" height="430" allow="microphone;" src="https://console.dialogflow.com/api-client/demo/embedded/39ea7749-be32-4e63-aa5d-47c3946792ac"></iframe>
    </div>
    </div>
    <div class="dropup-button-mobile" >

      <button onclick="chatButton()" class="dropbtn2 rounded-circle"> <img src="/images/bocadillo.png" alt=""></button>
      <div id="chatOne" class="dropup-content2">
        <iframe width="250" height="430" allow="microphone;" src="https://console.dialogflow.com/api-client/demo/embedded/39ea7749-be32-4e63-aa5d-47c3946792ac"></iframe>
    </div>
    </div>

    @include('layouts.footer')


  </body>
</html>
