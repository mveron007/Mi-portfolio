<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <!-- Scripts -->
    <!-- <script src="{{ asset('js/app.js') }}" defer></script> -->
    <script src="{{ asset('js/index.js') }}" defer></script>
    <script type="text/javascript">

    </script>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- <link rel="stylesheet" href="{{ asset('css/styles.css') }}"> -->
    <link rel="stylesheet" href="{{ asset('css/header-style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/item-style.css') }}">


  </head>
  @include('products.header')

  <body >

      <section class="container-card ">
      <!-- <div class="container-card " style="display: flex; flex-wrap: wrap;"> -->
        <!-- <div class="card" style="background-color:rgb(42, 150, 238); width:300px; height:300px;"> -->
        <div class="card card-1" style="background-image:url('../images/feed-box.png');
        background-size: contain; background-repeat: no-repeat; background-color: rgb(42, 150, 238); background-position: bottom;
        width:300px; height:330px;">
          <!-- <img src="/images/pets-feed.png" width="100px" alt=""> -->
          <h1 > <a  class="nav-link dropdown-toggle menu-item">Higiene</a> </h1>

          <div class="drop-link">
            <ul>
              <li> <a href="#"> Link </a> </li>
              <li> <a href="#"> Link </a> </li>
              <li> <a href="#"> Link </a> </li>

            </ul>
          </div>
        </div>

        <div class="card card-2" style="background-color:rgb(249, 196, 9); background-image:url('../images/paw-bed.png');
        background-repeat: no-repeat; background-position: bottom;
        width:500px; height:200px;">
        <h1 > <a  class="nav-link dropdown-toggle menu-item">Higiene</a> </h1>

        <div class="drop-link">
          <ul>
            <li> <a href="#"> Link </a> </li>
            <li> <a href="#"> Link </a> </li>
            <li> <a href="#"> Link </a> </li>

          </ul>
        </div>
        </div>

        <div class="card card-3" style="background-color:rgb(41, 38, 43); width:400px; height:250px; background-image:url('../images/box-clothes.png');
        background-repeat: no-repeat; background-position: bottom;">
        <h1 > <a href="#" class="menu-item">Higiene</a> </h1>
        <div class="drop-link">
          <ul>
            <li> <a href="#"> Link </a> </li>
            <li> <a href="#"> Link </a> </li>
            <li> <a href="#"> Link </a> </li>

          </ul>
        </div>
        </div>

        <div class="card card-4">
          <h1 > <a  class="nav-link dropdown-toggle menu-item">Higiene</a> </h1>

          <div class="drop-link">
            <ul>
              <li> <a href="#"> Link </a> </li>
              <li> <a href="#"> Link </a> </li>
              <li> <a href="#"> Link </a> </li>

            </ul>
          </div>
        </div>

        <div class="card card-5">
          <h1 > <a href="#" class="menu-item">Higiene</a> </h1>
          <div class="drop-link">
            <ul>
              <li> <a href="#"> Link </a> </li>
              <li> <a href="#"> Link </a> </li>
              <li> <a href="#"> Link </a> </li>

            </ul>
          </div>
        </div>

        </section>
      <!-- </div> -->

      @include('products.product-carousel')

      <!-- <script src="https://code.jquery.com/jquery-2.2.4.js"></script>

      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->

    <br><br><br>





  </body>
</html>
