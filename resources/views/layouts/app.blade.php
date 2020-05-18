<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>PhoPix</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <script src="{{ asset('js/counter.js') }}"></script> 
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    
  

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="./dist/css/light/neumorph-full.min.css" />
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <style>
      html {
        scroll-behavior: smooth;
      }

      body {
        background-color: #0C0C0C;
      }

      h1 {
        margin-top: 200px;
        font-family: 'Roboto', sans-serif;
        font-weight: 900px;
      }

      #cd {
        border: none;
      }

      .invalid-feedback{
        display: block;
      }

      #banner {
        background-image: url("https://raw.githubusercontent.com/raayanfaisal/phopix/master/public/Images/backdrop.png");
        background-attachment: fixed;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
      }

      span {
        color: #ffffff;
      }

      a {
        color: #FFF;
      }

      #service {
        margin-top: 100px;
      }

      #ctn {
        margin-left: 30px;
      }

      input[type=text], textarea {
        border: none;
        border-bottom: 2px solid white;
        background-color: #0C0C0C;
        color: white;
      }

      #txtbox {
        background-color: #0C0C0C;
        color: white;
      }

      #su {
        margin-top: 100px;
      }

      #cont {
        width: 2960px;
        height: 950px;
      }

      #serv {
        margin-top: 100px;
      }

      #button {
        margin-bottom: 50px;
      }
      .counter {
   
    padding: 20px 0;
    border-radius: 5px;
      }

      .count-title {
          font-size: 40px;
          font-weight: normal;
          margin-top: 10px;
          margin-bottom: 0;
          text-align: center;
      }

      .count-text {
          font-size: 13px;
          font-weight: normal;
          margin-top: 10px;
          margin-bottom: 0;
          text-align: center;
      }

      .fa-2x {
          margin: 0 auto;
          float: none;
          display: table;
          color: #4ad1e5;
      }

      #c2logo {
        margin-top: 50px;
      }

      #port {
        background-color: #303030;
        margin-top: 50px;
      }

      #porttext {
        margin-top: 200px;
      }

      #suu {
        margin-top: 450px;
      }

      #cakeform {
        margin-top: 200px;
        margin-left: 120px;
        padding-top: 115px;
      }

      #wrp {

        background-color: #303030;
        height: 700px;
        width: 550px;
      }
      </style>
</head>
<body>
<div id="app">
        
        <main class="">
            @yield('content')
        </main>
    </div>
    <div class="container-fluid">
<footer class="page-footer font-small special-color-dark pt-4" style="" id="ft"> 

  <!-- Footer Elements -->
  <div class="container">
    <div class="text-center mb-2">
          <a href="/privacy" class="text-info text-white">Privacy Policy |</a>

          <a href="/terms" class="text-info text-white">Terms and Condition's |</a>

          <a href="#" class="text-info text-white">Back to Top </a>
          
          <a href="https://www.vecteezy.com/free-vector/web-development">|Web Development Vectors by Vecteezy</a>
      </div>
    <!-- Social buttons -->
    <ul class="list-unstyled list-inline text-center">
      <li class="list-inline-item text-white">
        <a class="btn-floating btn-fb mx-1">
          <a class="text-white" href="https://www.facebook.com/Phopix-108547830842311/?modal=admin_todo_tour&notif_id=1588117275340198&notif_t=page_invite&ref=notif"><i class="fab fa-facebook-f text-white" id="ci"></i></a>
        </a>
      </li>
      <li class="list-inline-item text-white">
        <a class="btn-floating btn-tw mx-1">
          <a class="text-white" href="https://twitter.com/PhopixM"><i class="fab fa-twitter text-white" id="ci"></i>
        </a>
      </li>
      <li class="list-inline-item text-white">
        <a class="btn-floating btn-gplus mx-1">
          <a class="text-white" href="https://www.instagram.com/phopix.mv/"><i class="fab fa-instagram text-white" id="ci"></i></a>
        </a>
      </li>
    </ul>
    <!-- Social buttons -->
    <script>
    
    </script>

  </div>
  <!-- Footer Elements -->

  <!-- Copyright -->
  <div class="footer-copyright text-center text-white">7815551 / 9682212
  </div>
  <div class="footer-copyright text-center py-3 text-white">© 2020 Copyright:
    <a href="" style="" class="text-info text-white"> phopix.com</a>
  </div>
  <!-- Copyright -->

</footer>
</div>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
</body>
</html>
