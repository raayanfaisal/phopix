@extends('layouts.app')

@section('content')
<!-- ======= Hero Section ======= -->
<div class="container pt-5 mt-5">
    <div class="row">
        <div class="col-12">
            <h1>
                Welcome to PhoPix.
            </h1>
            <h4 class="pt-4">
            Phopix is a web development team based in the republic of Maldives . Currently we are a team of 5 young web developers , <b>Note Site under development</b>
            </h4>
            <a href="#cont" class="btn btn-primary btn-lg active m-5" role="button" aria-pressed="true">Hire Us!</a>
            <img src="https://raw.githubusercontent.com/raayanfaisal/phopix/master/public/Images/demo.png" alt="Recent work" width="100%" height="auto">
        </div>
    </div>
<!-- ======= End Hero Section ======= -->
<!-- ======= About Section ======= -->
    <div class="row">
        <div class="col-12 mt-5 pt-5">
            <h2>
                Who are we?
            </h2>
            <p>
            Phopix private limited is a company based in the republic of Maldives. And we offer a variety of services, and we strive to do them as near to perfection as we can get . To ensure maximum customer satisfaction in the end . We specialize in HTML5, CSS3, Laravel, MySQL and WordPress for building custom high-end websites that scale well on all your devices
            </p>
<!-- ======= Service Section ======= -->
            <h2 class="mt-4">
                Services we offer.
            </h2>
            <p>
              Below are our services
            </p>
            <div class="card-group mt-5">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">
                          Web design and development.
                        </h4>
                        <p>need a website ? We will design and develop a high-end website that will scale well on all devices</p>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">
                          Website Maintanance.
                        </h4>
                        <p>We will maintain your website like making updates pushing new images etc </p>
                    </div>
                </div>
            </div>

            <div class="card-group">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">
                          Application development. 
                        </h4>
                        <p>Need an app ? we will build you a app for your needs that support IOS and Android</p>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">
                          Social media page management.
                        </h4>
                        <p>We will maintain your social media pages for you and keep them upto date</p>
                    </div>
                </div>
            </div>

            <div class="card-group">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">
                          Logo Designing 
                        </h4>
                        <p>Need a logo ? we will design for you a logo that is modern and memorable</p>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">
                          Website management
                        </h4>
                        <p>Have a website and need to manage it ? leave it to us! we will keep it upto date</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <h2 class="pt-5">
        Some of our recent works
    </h2>
    <p>
    Our work spans from Building high performance sites from scratch to rebuilding existing websites while our work is aesthetically diverse we always strive to make it as user freindly as possible for the end user <b>note as we complete projects we will be adding them here
    </p>
    <!-- Default form contact -->
        <form class="text-center border border-light p-5" action="/" method="post">
        {{ csrf_field() }}
        <p class="h4 mb-4">Get in touch!</p>

        <!-- Name -->
        <input type="text" id="defaultContactFormName" class="form-control mb-4" placeholder="Name" name="nme">

        <!-- Email -->
        <input type="email" id="defaultContactFormEmail" class="form-control mb-4" placeholder="E-mail" name="mail">



        <!-- Message -->
        <div class="form-group">
            <textarea class="form-control rounded-0" id="exampleFormControlTextarea2" rows="3" placeholder="Message" name="msg"></textarea>
        </div>
        <!-- Send button -->
        <button class="btn btn-secondary btn-block" type="submit">Send</button>

        </form>
        <!-- Default form contact -->
</div>
<div class="container-fluid">
<!-- Footer -->
<footer class="page-footer font-small special-color-dark pt-4" style="background-color: grey;"> 

  <!-- Footer Elements -->
  <div class="container">

    <!-- Social buttons -->
    <ul class="list-unstyled list-inline text-center">
      <li class="list-inline-item">
        <a class="btn-floating btn-fb mx-1">
          <i class="fab fa-facebook-f"><a href=""><img src="https://raw.githubusercontent.com/raayanfaisal/phopix/master/public/Images/facebook.png" alt="" width="50px" height="50px"></a></i>
        </a>
      </li>
      <li class="list-inline-item">
        <a class="btn-floating btn-tw mx-1">
          <i class="fab fa-twitter"><a href="https://www.instagram.com/phopix.mv/"><img src="https://raw.githubusercontent.com/raayanfaisal/phopix/master/public/Images/inst.png" alt="" width="50px" height="50px"></a></i>
        </a>
      </li>
      <li class="list-inline-item">
        <a class="btn-floating btn-gplus mx-1">
          <i class="fab fa-google-plus-g"><a href="https://twitter.com/PhopixM"><img src="https://raw.githubusercontent.com/raayanfaisal/phopix/master/public/Images/twtt.png" alt="" width="50px" height="50px"></a></i>
        </a>
      </li>
    </ul>
    <!-- Social buttons -->

  </div>
  <!-- Footer Elements -->

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2020 Copyright:
    <a href="https://mdbootstrap.com/"> MDBootstrap.com</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->
</div>
<!-- ======= Service Section ======= -->
<!-- ======= End About Section ======= -->
@endsection
