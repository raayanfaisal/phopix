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
    body {

      background-color: #F2F5F7;
    }
  

    p {

      
      
      letter-spacing: 1px;
      font-family: 'Roboto', sans-serif;
      font-weight: 500;
      letter-spacing: 2px;
      color: #5a84a2;
      font-size:18px;



    }

    #cd {

      border-radius: 23px;
      background: #F2F5F7;
      box-shadow:  10px 10px 22px #e1e4e6, 
                  -10px -10px 22px #ffffff;
      border: none;
     
      text-transform: uppercase;
      font-weight: 500;
      letter-spacing: 2px;
      color: #5a84a2;
      font-size:18px;
    }

    #cd:hover {

      box-shadow: inset -2px -2px 8px rgba(255,255,255,1),
                  inset -2px -2px 12px rgba(255,255,255,0.5),
                  inset 2px 2px 4px rgba(255,255,255,0.1)
                    ,
                 inset 2px 2px 8px rgba(0,0,0,0.15);
      background-color: #F2F5F7;

    }

    #button {

      position: reletive;
      display: inline-block;
      padding: 10px 30px;
      text-decoration: none;
      text-transform: uppercase;
      font-weight: 500;
      letter-spacing: 2px;
      color: #5a84a2;
      font-size:18px;
      border-radius: 40px;
      box-shadow: -2px -2px 8px rgba(255,255,255,1),
                  -2px -2px 12px rgba(255,255,255,0.5),
                  inset 2px 2px 4px rgba(255,255,255,0.1)
                    ,
                  2px 2px 8px rgba(0,0,0,0.15);
    }

    #timg {

      box-shadow: -2px -2px 8px rgba(255,255,255,1),
                  -2px -2px 12px rgba(255,255,255,0.5),
                  inset 2px 2px 4px rgba(255,255,255,0.1)
                    ,
                  2px 2px 8px rgba(0,0,0,0.15);

    }

    #button:hover {

      box-shadow: inset -2px -2px 8px rgba(255,255,255,1),
                  inset -2px -2px 12px rgba(255,255,255,0.5),
                  inset 2px 2px 4px rgba(255,255,255,0.1)
                    ,
                 inset 2px 2px 8px rgba(0,0,0,0.15);

    }

    #ft {
      background: #2e3f49;
      font-weight: 500;
      letter-spacing: 2px;
      color: #5a84a2;
      font-size:18px;
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
            <nav class="navbar navbar-expand-lg navbar-light bg-#F2F5F7" style="">
  <a class="navbar-brand" href="#"><img src="https://raw.githubusercontent.com/raayanfaisal/phopix/master/public/Images/hlogo.png" alt="logo" width="40px" height="40px"></a>
  <a class="navbar-brand" href="#">PHOPIX</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="/">Home <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="#cd">Who We Are</a>
      <a class="nav-item nav-link" href="#work">Portfolio</a>
      <a class="nav-item nav-link" href="/subscriptions">Subscriptions</a>
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
