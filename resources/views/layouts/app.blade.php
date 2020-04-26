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
</head>
<body>
    <div id="app">
        <header>
            <div class="container mt-5">
                <nav class="navbar navbar-expand-lg navbar-light bg-white">
                      <a class="navbar-brand" href="#">PHOPIX</a>
                      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="#abt">Who we are</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="#port">Portfolio</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="#cont">Hire Us</a>
            </li>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
    </ul>
    <a href="" class="ml-3"><img src="/images/06-facebook-512.png" alt="" width="20px" height="20px"></a>
    <a href="" class="ml-3"><img src="/images/twitter.png" alt="" width="20px" height="20px"></a>
    <a href="" class="ml-3"><img src="/images/insta.png" alt="" width="30px" height="30px"></a>
    
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
