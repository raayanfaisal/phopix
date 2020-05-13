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
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>

    

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    
  

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="./dist/css/light/neumorph-full.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
   <style>
        body {
  background-color: white ;
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



   </style>
</head>
<body>
    <div id="app">
        <header style="background-color: #FFFF;">
            <div class="container mt-5">
            <nav class="navbar navbar-expand-lg navbar-light bg-#FFFF" style="background-color: #FFFF;">
  <a class="navbar-brand" href="#"><img src="https://raw.githubusercontent.com/raayanfaisal/phopix/master/public/Images/hlogo.png" alt="logo" width="40px" height="40px"></a>
  <a class="navbar-brand" href="#">PhoPix</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="/">Home <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="#wha">Who we are</a>
      
      <a class="nav-item nav-link" href="/subscriptions">Subscriptions</a>
      <a class="nav-item nav-link" href="/contact">Get in touch</a>
    </div>
  </div>
</nav>
            </div>
        </header>
        <main class="">
            @yield('content')
        </main>
    </div>
    <div class="container-fluid">
<footer class="page-footer font-small special-color-dark pt-4" style="" id="ft"> 

  <!-- Footer Elements -->
  <div class="container">
    <div class="text-center mb-2">
          <a href="/privacy" class="text-info">Privacy Policy |</a>

          <a href="/terms" class="text-info">Terms and Condition's |</a>

          <a href="#" class="text-info">Back to Top </a>
          
          <a href="https://www.vecteezy.com/free-vector/web-development">|Web Development Vectors by Vecteezy</a>
      </div>
    <!-- Social buttons -->
    <ul class="list-unstyled list-inline text-center">
      <li class="list-inline-item">
        <a class="btn-floating btn-fb mx-1">
          <a href="https://www.facebook.com/Phopix-108547830842311/?modal=admin_todo_tour&notif_id=1588117275340198&notif_t=page_invite&ref=notif"><i class="fab fa-facebook-f" id="ci"></i></a>
        </a>
      </li>
      <li class="list-inline-item">
        <a class="btn-floating btn-tw mx-1">
          <a href="https://twitter.com/PhopixM"><i class="fab fa-twitter" id="ci"></i>
        </a>
      </li>
      <li class="list-inline-item">
        <a class="btn-floating btn-gplus mx-1">
          <a href="https://www.instagram.com/phopix.mv/"><i class="fab fa-instagram" id="ci"></i></a>
        </a>
      </li>
    </ul>
    <!-- Social buttons -->
    
  </div>
  <!-- Footer Elements -->

  <!-- Copyright -->
  <div class="footer-copyright text-center">7815551 / 9682212
  </div>
  <div class="footer-copyright text-center py-3">© 2020 Copyright:
    <a href="" style="" class="text-info"> phopix.com</a>
  </div>
  <!-- Copyright -->

</footer>
</div>
</body>
</html>
