<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>phopix</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
  

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="css/mdb.min.css">
    <style>
    h1 {

        animation: type 3s steps(17);
        overflow: hidden;
        white-space: nowrap;
        border-right: 4px solid black;
        font-family: consolas;
    }
    
    p {
        
        letter-spacing: 3px;
        

    font-family: 'Montserrat', sans-serif;


    
    }

    @keyframes type {

      0% {

        width: 0ch;
      }
      100% {

        width: 22ch;
      }
    }
    </style>
</head>
<body>
    <div id="app">
        <header>
            <div class="container mt-5">
            <nav class="navbar navbar-expand-lg navbar-light bg-white" style="">
  <a class="navbar-brand" href="#">Phopix</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="#">Who We Are</a>
      <a class="nav-item nav-link" href="#">Portfolio</a>
      <a class="nav-item nav-link" href="mailto:phopixofficial@gmail.com">Get in touch</a>
    </div>
  </div>
</nav>
            </div>
        </header>
        <main class="">
            @yield('content')
        </main>
    </div>
</body>
</html>
