@extends('layouts.app')

@section('content')
<!-- ======= Hero Section ======= -->
<div class="container" style="background-color: #F2F5F7">
    <div class="jumbotron" style="background-color: #F2F5F8">
  <h1 class="display-4">Welcome to phopix</h1>
  <p class="lead">Making it, Simple</p>
  <hr class="my-4">
 
  <a class="btn btn-primary btn-lg" href="#wk" role="button">See our work</a>
  <img src="https://raw.githubusercontent.com/raayanfaisal/phopix/master/public/Images/demo%20website.JPG" alt="template" width="100%" height="auto">
</div>
<!-- ======= End Hero Section ======= -->
<!-- ======= About Section ======= -->
    <div class="row">
        <div class="col-12 mt-5 pt-5" id="abt">
            <h2><b>
                Who are we?
            </h2></b>
            <p>
            Phopix private limited is a company based in the republic of Maldives. And we offer a variety of services, and we strive to do them as near to perfection as we can get . To ensure maximum customer satisfaction in the end . We specialize in HTML5, CSS3, Laravel, MySQL and WordPress for building custom high-end websites that scale well on all your devices
            </p>
<!-- ======= Service Section ======= -->
            <h2 class="mt-4"><b>
                Services we offer.
            </h2></b>
            <p>
              Below are our services
            </p>
            <div class="">
                <div class="card-group">
                    <div class="card m-2" style="" id="cd">
                        <div class="card-body">
                            <h4 class="card-title"><b>
                              Web design and development.
                            </h4></b>
                            <p>we will design and build for you a high performance  website</p>
                        </div>
                    </div>

                    <div class="card m-2" style="" id="cd">
                        <div class="card-body">
                            <h4 class="card-title"><b>
                              Website Maintanance.
                            </h4></b>
                            <p>We will maintain your existing website and keep it in running condition 24/7</p>
                        </div>
                    </div>
                </div>

                <div class="card-group">
                    <div class="card m-2" style="" id="cd">
                        <div class="card-body">
                            <h4 class="card-title"><b>
                              Application development. 
                            </h4></b>
                            <p>we will build apps that can run on both IOS and Android</p>
                        </div>
                    </div>

                    <div class="card m-2" style="" id="cd">
                        <div class="card-body">
                            <h4 class="card-title"><b>
                              Social media page management.
                            </h4></b>
                            <p>any platform with a affordable price</p>
                        </div>
                    </div>
                </div>

                <div class="card-group">
                    <div class="card m-2" style="" id="cd">
                        <div class="card-body">
                            <h4 class="card-title"><b>
                              Logo Designing 
                            </h4></b>
                            <p>Custom logos that comply with modern trends and is upto your specs</p>
                        </div>
                    </div>

                    <div class="card m-2" style="" id="cd">
                        <div class="card-body">
                            <h4 class="card-title"><b>
                              Website management
                            </h4></b>
                            <p>We will manage your website, uploading picture and making corrections</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <h2 class="pt-5 mb-5" id="wk"><b>
        Some of our recent works
    </h2></b>
    <p>
    Our work spans from Building high performance sites from scratch to rebuilding existing websites while our work is aesthetically diverse, we always strive to make it as user freindly as possible for the end user <b>note as we complete projects we will be adding them here
    </p> 
    <!--Carousel Wrapper-->
<div id="carousel-example-2" class="carousel slide carousel-fade mb-5" data-ride="carousel">
  <!--Indicators-->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-2" data-slide-to="1"></li>
    <li data-target="#carousel-example-2" data-slide-to="2"></li>
  </ol>
  <!--/.Indicators-->
  <!--Slides-->
  <div class="carousel-inner" role="listbox">
    <div class="carousel-item active">
      <div class="view">
        <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(68).jpg  "
          alt="First slide">
        <div class="mask rgba-black-light"></div>
      </div>
      <div class="carousel-caption">
        <h3 class="h3-responsive">[Website Address]</h3>
        <p>First Project</p>
      </div>
    </div>
    <div class="carousel-item">
      <!--Mask color-->
      <div class="view">
        <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(6).jpg"
          alt="Second slide">
        <div class="mask rgba-black-strong"></div>
      </div>
      <div class="carousel-caption">
        <h3 class="h3-responsive">[Website Address]</h3>
        <p>Second project</p>
      </div>
    </div>
    <div class="carousel-item">
      <!--Mask color-->
      <div class="view">
        <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(9).jpg"
          alt="Third slide">
        <div class="mask rgba-black-slight"></div>
      </div>
      <div class="carousel-caption">
        <h3 class="h3-responsive">[Website Address]</h3>
        <p>Third Project</p>
      </div>
    </div>
  </div>
  <!--/.Slides-->
  <!--Controls-->
  <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
  <!--/.Controls-->
</div>
<!--/.Carousel Wrapper-->
</div>
<div class="container-fluid">
<!-- Footer -->
<footer class="page-footer font-small special-color-dark pt-4" style="" id="ft"> 

  <!-- Footer Elements -->
  <div class="container">
    <div class="text-center mb-2">
          <a href="/privacy" class="text-info">Privacy Policy |</a>

          <a href="/terms" class="text-info">Terms and Condition's |</a>

          <a href="#" class="text-info">Back to Top </a>
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
<!-- Footer -->
</div>
<!-- ======= Service Section ======= -->
<!-- ======= End About Section ======= -->
@endsection
