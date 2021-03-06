<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="idBODY">
    <div id="app">
        <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="img/ImagemBioextratus.png" width="160" height="50" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            {{-- <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li> --}}

                            <ul>
                           
                                <a class="btn btn-primary mt-2" href="/">
                                <span class="fas fa-home"></span></a>
                           
                        </ul>
                            @if (Route::has('register'))
                            <ul class ="ml-4">
                              
                                    <a class="btn btn-primary mt-2" href="{{ route('register') }}">
                                    <span class="fas fa-user-plus px-2">
                                   </span></a>
                                </ul>
  
                                <ul>
                                    <div class="btn-group ml-4 mt--5" role="group" aria-label="Button group with nested dropdown" style ="width: -40px;">
                  <div class="btn-group" role="group">
                    <button id="btnGroupDrop1" type="button" class="btn btn-light dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <img src="img/ImagemBrasil.png" width="40" height="30" class="d-inline-block align-top" alt="">
                    </button>

                    <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">


                      <a class="dropdown-item" href="">
                        <img src="img/ImagemBrasil.png" role ="button" width="40" height="30" class="d-inline-block align-top" alt=""></a>

                        <a class="dropdown-item" href="">
                          <img src="img/ImagemEspanha.jpg" role ="button" width="40" height="30" class="d-inline-block align-top" alt=""></a>

                          <a class="dropdown-item" href="">
                            <img src="img/ImagemIngles.jpg" role ="button" width="40" height="30" class="d-inline-block align-top" alt=""></a>


                          </div>
                        </div>
                      </div>
                                </ul>


                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

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

       
            @yield('content')
    </div>
</body>
</html>
