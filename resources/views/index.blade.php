@extends('layouts.app')

@section('content')
<div class="container">
  <header>
     <!-- The overlay -->
    <div id="myNav" class="overlay">

    <!-- Button to close the overlay navigation -->
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

    <!-- Overlay content -->
    <div class="overlay-content">
      <a href="/">HOME</a>
      <a href="#about">ABOUT</a>
      <a href="#">SUBSCRIPTIONS</a>
      <a href="/contact">CONTACT</a>
      <!-- Default checked -->
    </div>

    </div>

    <!-- Use any element to open/show the overlay navigation menu -->
    <span onclick="openNav()"><i class="fas fa-bars fa-2x mt-4"></i></span>
    
    <img src="https://raw.githubusercontent.com/raayanfaisal/phopix/5b4885ad5387b3bda802435887c6320a9afbf758/public/Images/phopix-dark.svg" alt="phopix-logo" width="60px" height="60px" id="myLogo" class="pull-right mt-2">
  </header>
  <section>
    <div class="row">
      <div class="col">
        <h3 class="heading0 text-center" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="1000">WE ARE</h3>
        <h1 class="heading1 text-center" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="1000"><b>PHOPIX</b></h1>
        <p class="moto text-center" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="1000">MAKING IT, SIMPLE</p>
        <div class="social-icons text-center" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="1000">
          <a href="https://www.facebook.com/PhoPixMv"><i class="fab fa-facebook-f text-center"></i></a>
          <a href="https://twitter.com/PhopixM"><i class="fab fa-twitter text-center"></i></a>
          <a href="https://www.instagram.com/phopix.mv/"><i class="fab fa-instagram text-center"></i></a>
        </div>

       
        <!-- Modal -->
          <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">
    
            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title">Settings Panel</h4>
                <button type="button" class="close" data-dismiss="modal"><i class="fas fa-window-close"></i></button>
              </div>
              <div class="modal-body">
              <div class="custom-control custom-switch switch-info">
                  <input type="checkbox" class="custom-control-input" name="theme" id="customSwitch1">
                  <label class="custom-control-label" for="customSwitch1">Lights out</label>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
            </div>
            
          </div>
        </div>
      </div>
    </div>
  </section>
  <section>
    <div class="about-heading">
      <div class="row">
          <div class="col-md-6 about-section">
            <div class="about-heading">
              <h2 id="about" data-aos="fade-right" data-aos-easing="ease-in-out" data-aos-duration="1000">ABOUT US</h2>
            </div>
            <div class="about-text">
              <p data-aos="fade-right" data-aos-easing="ease-in-out" data-aos-duration="1000">Phopix private limited is a company based in the republic of Maldives. And we offer a variety of services, and we strive to do them as near to perfection as we can get . To ensure maximum customer satisfaction in the end . We specialize in HTML5, CSS3, Laravel, MySQL and WordPress for building custom high-end websites that scale well on all your devices.</p>
            </div>
            <div class="second-img">
              <img src="https://raw.githubusercontent.com/raayanfaisal/phopix/master/public/Images/second-image.jpg" alt="second-image" width="400px" height="400px" data-aos="fade-right" data-aos-easing="ease-in-out" data-aos-duration="1000">
            </div>
          </div>
          <div class="col-md-6">
            <div class="about-image">
              <img src="https://raw.githubusercontent.com/raayanfaisal/phopix/master/public/Images/about-image.jpg" alt="" width="400px" height="400px" data-aos="fade-left" data-aos-easing="ease-in-out" data-aos-duration="1000">
              <div class="about-heading-2">
              <h2 data-aos="fade-left" data-aos-easing="ease-in-out" data-aos-duration="1000">OUR WORKFLOW</h2>
            </div>

            <div class="about-text-2">
              <p data-aos="fade-left" data-aos-easing="ease-in-out" data-aos-duration="1000">Our workflow consists of three phases, once you as the client confirm your order. phase P.01 is the initial meeting where we sitdown and discuss the details of the project. phase P.02 Once P1 is complete we require you to sign a contract, then  only the design and development phase will begin. once it begins you will be notified via email or mobile.  P.03 after P2 we Upload the website on to the live servers and configure everything such as domain and email protocol, and we hand out a copy of the source code to you.</p>
            </div>
            </div>
          </div>
      </div>
    </div>
  </section>
<section>
    <div class="container">
    <h2 class="text-center mt-5 pt-5" style="color: white;">OUR SERVICES</h2>
      <div class="card-group mt-5" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="1000">
        <div class="card text-center m-4" style="width: 18rem; background-color: #1f1f1f; border-radius: 10px;">
          <i class="fas fa-code fa-2x mt-3"></i>
          <div class="card-body">
            <h5 class="card-title" style="color: white;">Web development</h5>
            <p class="card-text">Designing and developing custom high-end responsive websites for business and personal uses. </p>
          </div>
        </div>

        <div class="card text-center m-4" style="width: 18rem; background-color: #1f1f1f; border-radius: 10px;">
          <i class="fas fa-mobile fa-2x mt-3"></i>
          <div class="card-body">
            <h5 class="card-title" style="color: white;">Application development</h5>
            <p class="card-text">Developing applications that operate on both iOS and Android and runs stable</p>
          </div>
        </div>

        <div class="card text-center m-4" style="width: 18rem; background-color: #1f1f1f; border-radius: 10px;">
          <i class="fas fa-paint-roller fa-2x mt-3"></i>
          <div class="card-body">
            <h5 class="card-title" style="color: white;">Logo designing</h5>
            <p class="card-text">Designing of custom logos that meets you specifications</p>
          </div>
        </div>
      </div>

      <div class="card-group mt-5" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="1000">
        <div class="card text-center m-4" style="width: 18rem; background-color: #1f1f1f; border-radius: 10px;">
          <i class="fas fa-users fa-2x mt-3"></i>
          <div class="card-body">
            <h5 class="card-title" style="color: white;">Social Media management</h5>
            <p class="card-text">Managing of your business social media pages</p>
          </div>
        </div>

        <div class="card text-center m-4" style="width: 18rem; background-color: #1f1f1f; border-radius: 10px;">
          <i class="fas fa-server fa-2x mt-3"></i>
          <div class="card-body">
            <h5 class="card-title" style="color: white;">Website maintanance</h5>
            <p class="card-text">Maintanace of your website eg: Updating, Spam filtering etc</p>
          </div>
        </div>

        <div class="card text-center m-4" style="width: 18rem; background-color: #1f1f1f; border-radius: 10px;">
          <i class="fas fa-pencil-alt fa-2x mt-3"></i>
          <div class="card-body">
            <h5 class="card-title" style="color: white;">Web designing</h5>
            <p class="card-text">Designing of website layout in AdobeXD and photoshop</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section style="margin-bottom: 50px;">
    <div class="portfolio">
      <h2 id="port" class="text-center">PORTFOLIO</h2>
    </div>
    <p class="text-center mb-5" style="font-size: 20px;">These are some of our completed works, some sites that we created we did not get permission to upload them here.</p>
    <div class="row">
      <div class="col-md-6 mb-3">
        <img src="https://raw.githubusercontent.com/raayanfaisal/phopix/master/public/Images/ml.png" alt="client-logo" width="100%" height="100%">
      </div>

      <div class="col-md-6 mb-3">
        <img src="https://raw.githubusercontent.com/raayanfaisal/phopix/master/public/Images/C2logo.jpg" alt="client-logo" width="100%" height="100%">
      </div>
    </div>

    <div class="row">
      <div class="col-md-6 mt-3">
        <img src="https://raw.githubusercontent.com/raayanfaisal/phopix/master/public/Images/onics.png" alt="client-logo" width="100%" height="100%">
      </div>

      <div class="col-md-6 mt-3">
        <img src="https://raw.githubusercontent.com/raayanfaisal/phopix/master/public/Images/1.png" alt="client-logo" width="100%" height="100%">
      </div>
    </div>
  </section>
  </div>
 <!-- Footer -->
<footer class="page-footer font-small blue pt-4 container mt-5" style="margin-top: 20px; border-top: 1px solid white;">

  <!-- Footer Links -->
  <div class="container-fluid text-center text-md-left">

    <!-- Grid row -->
    <div class="row">

      <!-- Grid column -->
      <div class="col-md-6 mt-md-0 mt-3">

        <!-- Content -->
        <h5 class="text-uppercase" style="color: white;">Phopix</h5>
        <p style="color: white;">making it, simple</p>

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none pb-3">

      <!-- Grid column -->
      <div class="col-md-3 mb-md-0 mb-3">

        <!-- Links -->
        <h5 class="text-uppercase" style="color: white;">Social Media</h5>

        <ul class="list-unstyled">
          <li>
            <a href="https://www.facebook.com/PhoPixMv" style="color: white;">Facebook</a>
          </li>
          <li>
            <a href="https://www.instagram.com/phopix.mv/" style="color: white;">Twitter</a>
          </li>
          <li>
            <a href="https://twitter.com/PhopixM" style="color: white;">Instagram</a>
          </li>
        </ul>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-3 mb-md-0 mb-3">

        <!-- Links -->
        <h5 class="text-uppercase" style="color: white;">Usefull links</h5>

        <ul class="list-unstyled">
          <li>
            <a href="/terms" style="color: white;">Terms and Condition</a>
          </li>
          <li>
            <a href="/privacy" style="color: white;">Privacy Policy</a>
          </li>
        </ul>

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3" style="color: white;">© 2020 Copyright:
    <a href="https://mdbootstrap.com/" style="color: white;"> phopix.com</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->

<script src="{{ asset('js/nav.js') }}"></script>
@endsection
