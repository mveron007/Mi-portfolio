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
  </head>
  <body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="#">Home</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-item nav-link active" href="/login">Mi cuenta <span class="sr-only">(current)</span></a>
          <a class="nav-item nav-link" href="/register">Registrarme</a>
        </div>
      </div>
    </nav>

    <!-- <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel" data-interval="false">
      <div class="carousel-inner">
        <div class="carousel-item active">
              <div class="card-deck">
              <?php foreach ($products as $product): ?>
                  <div class="card">
                    <img src="/storage/posters/{{ $product->image }}" class="card-img-top" />
                    <div class="card-body">
                      <h1 class="card-title">{{$product->title}}</h1>
                      <h5>$ {{$product->price}}</h5>
                      <p class="card-text">{{$product->description}}</p>
                    </div>
                    <div class="card-footer">
                      <small class="text-muted">Last updated 3 mins ago</small>
                    </div>
                  </div>

              <?php endforeach; ?>
            </div>

        </div>
        <div class="carousel-item">
          <img src="..." class="d-block w-100" alt="...">
          DEF
        </div>
        <div class="carousel-item">
          <img src="..." class="d-block w-100" alt="...">
          GHI
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div> -->

    <div class="card-deck">
    <?php foreach ($products as $product): ?>
        <div class="card">
          <img src="/storage/posters/{{ $product->image }}" class="card-img-top" />
          <div class="card-body">
            <h1 class="card-title">{{$product->title}}</h1>
            <h5>$ {{$product->price}}</h5>
            <p class="card-text">{{$product->description}}</p>
          </div>
          <div class="card-footer">
            <small class="text-muted">Last updated 3 mins ago</small>
          </div>
        </div>

    <?php endforeach; ?>
  </div>





  </body>
</html>
