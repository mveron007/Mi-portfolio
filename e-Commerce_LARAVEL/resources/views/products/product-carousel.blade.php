<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <title></title>
    <meta charset="utf-8">

    <link rel="stylesheet" type="text/css" href="css/slick/slick.css">
    <link rel="stylesheet" type="text/css" href="css/slick/slick-theme.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style type="text/css">
      html, body {
        margin: 0;
        padding: 0;
      }

      * {
        box-sizing: border-box;
      }

      .title-product{
        display: inline-flex;
        position: relative;
        left: 42%;
        border-bottom: solid 2px rgb(219, 108, 16);

      }
      .title-product h1{
        font-family: 'Acme', sans-serif;
      }
      @media (max-width:500px) {
          .title-product{
              left: 24%;
          }
      }

      .slider {
          width: 90%;
          margin: 100px auto;
      }

      .slick-slide {
        margin: 0px 20px;
      }

      .slick-slide img {
        width: 100%;
      }

      .slick-prev:before,
      .slick-next:before {
        color: black;
      }


      .slick-slide {
        transition: all ease-in-out .3s;
        opacity: .2;
      }

      .slick-active {
        opacity: .5;
      }

      .slick-current {
        opacity: 1;
      }
    </style>

  </head>
  <body>

    <div class="title-product">
      <h1>Productos</h1>
    </div>
    <!-- <section class="center slider"> -->
      <section class="variable slider">
        @foreach ($products as $product)


          <div>
            <div class="card" style="width: 18rem;">
              <img src="/storage/posters/{{ $product->image }}" class="card-img-top" alt="...">

              <div class="card-body">
                <h1 class="card-title">{{$product->title}}</h1>
                <h5>$ {{$product->price}}</h5>
                <!-- <p class="card-text">{{ $product->description }}</p> -->
                 <a href="/products/detail/{{$product->id}}" class="btn btn-primary">Ver más</a>
                 <div class="card-footer">
                   <small class="text-muted">{{$product->updated_at}}</small>
                 </div>
              </div>
            </div>

          </div>
        @endforeach

    </section>

    <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
    <!-- <script src="./slick/slick.js" type="text/javascript" charset="utf-8"></script> -->
    <script src="{{ asset('js/slick/slick.js') }}" charset="utf-8"></script>

    <script type="text/javascript">
      $(document).on('ready', function() {

        // $(".center").slick({
        //   dots: true,
        //   infinite: true,
        //   centerMode: true,
        //   slidesToShow: 5,
        //   slidesToScroll: 3
        // });

        $(".variable").slick({
          dots: false,
          infinite: true,
          variableWidth: true,
          centerMode: true,
          mobileFirst: true
        });

      });
  </script>

  </body>
</html>
