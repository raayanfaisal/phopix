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
      <a href="/subscriptions">SUBSCRIPTIONS</a>
      <a href="/contact">CONTACT</a>
      <!-- Default checked -->
    </div>

    </div>

    <!-- Use any element to open/show the overlay navigation menu -->
    <span onclick="openNav()"><i class="fas fa-bars fa-2x mt-4"></i></span>
    <button type="button" class="btn mb-3" data-toggle="modal" data-target="#myModal"><i class="fas fa-lightbulb fa-2x"></i></button>
    <img src="https://raw.githubusercontent.com/raayanfaisal/phopix/5b4885ad5387b3bda802435887c6320a9afbf758/public/Images/Phopix-light.svg" alt="phopix-logo" width="60px" height="60px" id="myLogo" class="pull-right mt-2">
  </header>
  <section>
    <div class="row">
      <div class="col">
        <h3 class="heading0 text-center" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="1000">WE ARE</h3>
        <h1 class="heading1 text-center" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="1000"><b>PHOPIX</b></h1>
        <p class="moto text-center" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="1000">MAKING IT, SIMPLE</p>
        <div class="social-icons text-center">
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
              <h2 data-aos="fade-left" data-aos-easing="ease-in-out" data-aos-duration="1000">OUR SERVICES</h2>
            </div>

            <div class="about-text-2">
              <p data-aos="fade-left" data-aos-easing="ease-in-out" data-aos-duration="1000">We offer a variety of services, such as application development, website development/management, logo designing,
Social media page development/management. Our services are flexible and customizable, depending upon how you want it! Details are important to us.
<b>Details matter, it's worth waiting for ----Steve jobs</b></p>
            </div>
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
<footer class="page-footer font-small blue pt-4 container mt-5" style="margin-top: 20px;">

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
  <div class="footer-copyright text-center py-3">© 2020 Copyright:
    <a href="https://mdbootstrap.com/" style="color: black;"> phopix.com</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->

<script src="{{ asset('js/nav.js') }}"></script>
@endsection
