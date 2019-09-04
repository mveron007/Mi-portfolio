<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/ex.js') }}" defer></script>
    <!-- <script src="{{ asset('js/register2.js') }}" defer></script> -->

    <!-- <script src="{{ asset('js/register.js') }}" defer></script> -->




    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">



    <!-- Script -->
    <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>


</head>
<body style="background-image: url('http://www.gemmaj.co.uk/wp-content/uploads/2018/08/Image_1-2-1024x684.jpeg'); background-repeat:no-repeat; background-size: cover;">
    <div id="app">
        <nav class="navbar navbar-expand-md  shadow-sm my-second-nav" style="background-color:rgb(238, 126, 10);">
            <div class="container">
              <!-- Logo -->
                <div class="navbar-brand">
                    <!-- {{ config('app.name', 'Laravel') }} -->
                    <!-- <strong>e-Commerce</strong> -->
                    <a href="/" style="left:0%;"><img src="/images/logo-brufood2.png" alt="" class="rounded-circle" width="80px;"></a>

                </div>
                <!-- Fin de logo -->



                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"> <img src="/images/menu.png" alt="">  </span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->


                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">

                      @auth

                        <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle text-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Alimentos</a>
                          <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Separated link</a>
                          </div>
                        </li>

                        <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle text-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Camas y colchonetas</a>
                          <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Separated link</a>
                          </div>
                        </li>

                        <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle text-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Ropa</a>
                          <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Separated link</a>
                          </div>
                        </li>

                        <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle text-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Identificación</a>
                          <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Separated link</a>
                          </div>
                        </li>

                        <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle text-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Estética e higiene</a>
                          <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Separated link</a>
                          </div>
                        </li>

                      


                      @endauth
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else

                            <form class="form-inline my-2 my-lg-0" role="search" action="{{url('home/searchredirect')}}">
                             <!-- <div class="form-group"> -->
                              <input type="text" class="form-control mr-sm-2" name='search' placeholder="Buscar ..." />
                             <!-- </div> -->
                             <button type="submit" class="btn btn-primary my-2 my-sm-0">Buscar</button>
                            </form>

                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                 @if (Auth::check())
                                                      @if (Auth::user()->is_admin == true)
                                 <a class="dropdown-item" href="{{url('#')}}">Panel de Administrador</a>
                                                      @endif
                                 <a class="dropdown-item" href="{{url('home')}}">Mi cuenta</a>
                                 <a class="dropdown-item" href="{{url('cart')}}">Mis compras</a>

                                 @else
                                          <li><a href="{{url('auth/login')}}">Iniciar sesión</a></li>
                                 @endif
                                        </ul>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf

                                    </form>
                                </div>
                            </li>

                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>

        <footer >
          <nav>
            <ul class="nav flex-column location">
              <li class="nav-item"> <a href="#"> <img src="/images/descubrir.png" alt=""> Florencio Varela, Buenos Aires</a> </li>
              <li class="nav-item"> <a href="#"> <img src="/images/llamada-telefonica.png" alt=""> 4123-6788</a> </li>
              <li class="nav-item"> <a href="#"> <img src="/images/email.png" alt=""> brufood@gmail.com</a> </li>

            </ul>
            <ul class="nav justify-content-center social-links">
              <li> <a  class="nav-item social" href="https://www.facebook.com/Brufood-110286890328592/?"> <img src="/images/facebook.png" alt=""> </a> </li>
              <li> <a  class="nav-item social" href="https://web.telegram.org/#/login"> <img src="/images/telegram.png" alt=""> </a> </li>

            </ul>
        </footer>

    </div>



</body>
</html>
