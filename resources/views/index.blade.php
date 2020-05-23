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
      <a href="#">HOME</a>
      <a href="#">ABOUT</a>
      <a href="#">PORTFOLIO</a>
      <a href="#">CONTACT</a>
      <!-- Default checked -->
    </div>

    </div>

    <!-- Use any element to open/show the overlay navigation menu -->
    <span onclick="openNav()"><i class="fas fa-bars fa-2x mt-4"></i></span>
    <img src="/images/phopix.svg" alt="phopix-logo" width="60px" height="60px" class="pull-right mt-2">
  </header>
  <section>
    <div class="row">
      <div class="col">
        <h3 class="heading0 text-center" data-aos="fade-up">WE ARE</h3>
        <h1 class="heading1 text-center" data-aos="fade-up"><b>PHOPIX</b></h1>
        <p class="moto text-center" data-aos="fade-up">MAKING IT, SIMPLE</p>
        <div class="social-icons text-center">
          <a href=""><i class="fab fa-facebook-f text-center"></i></a>
          <a href=""><i class="fab fa-twitter text-center"></i></a>
          <a href=""><i class="fab fa-instagram text-center"></i></a>
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
              <h2 data-aos="fade-right">ABOUT US</h2>
            </div>
            <div class="about-text">
              <p data-aos="fade-right">Phopix private limited is a company based in the republic of Maldives. And we offer a variety of services, and we strive to do them as near to perfection as we can get . To ensure maximum customer satisfaction in the end . We specialize in HTML5, CSS3, Laravel, MySQL and WordPress for building custom high-end websites that scale well on all your devices.</p>
            </div>
            <div class="second-img">
              <img src="/images/second-image.jpg" alt="second-image" width="400px" height="400px" data-aos="fade-right">
            </div>
          </div>
          <div class="col-md-6">
            <div class="about-image">
              <img src="/images/about-image.jpg" alt="" width="400px" height="400px" data-aos="fade-left">
              <div class="about-heading-2">
              <h2 data-aos="fade-left">OUR SERVICES</h2>
            </div>

            <div class="about-text-2">
              <p data-aos="fade-left">We offer our clients a variety of services, and they are Designing Logos </p>
            </div>
            </div>
          </div>
      </div>
    </div>
  </section>
  <section>
  <div class="testimonal">
    <h2>Testimonials</h2>
  </div>
			<div id="myCarousel" class="carousel slide" data-ride="carousel">
				<!-- Carousel indicators -->
				<ol class="carousel-indicators">
					<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
					<li data-target="#myCarousel" data-slide-to="1"></li>
					<li data-target="#myCarousel" data-slide-to="2"></li>
				</ol>   
				<!-- Wrapper for carousel items -->
				<div class="carousel-inner">
					<div class="item carousel-item active">
						<div class="img-box"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSS1_an2x9kdsUqcWy2kGMNUMlYXbyf0Sr9896Tx5uXZbNvIc2L&usqp=CAU" alt=""></div>
						<p class="testimonial">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor, varius quam at, luctus dui. Mauris magna metus, dapibus nec turpis vel, semper malesuada ante. Idac bibendum scelerisque non non purus. Suspendisse varius nibh non aliquet.</p>
						<p class="overview"><b>Paula Wilson</b>, Media Analyst</p>
					</div>
					<div class="item carousel-item">
						<div class="img-box"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSS1_an2x9kdsUqcWy2kGMNUMlYXbyf0Sr9896Tx5uXZbNvIc2L&usqp=CAU" alt=""></div>
						<p class="testimonial">Vestibulum quis quam ut magna consequat faucibus. Pellentesque eget nisi a mi suscipit tincidunt. Utmtc tempus dictum risus. Pellentesque viverra sagittis quam at mattis. Suspendisse potenti. Aliquam sit amet gravida nibh, facilisis gravida odio.</p>
						<p class="overview"><b>Antonio Moreno</b>, Web Developer</p>
					</div>
					<div class="item carousel-item">
						<div class="img-box"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSS1_an2x9kdsUqcWy2kGMNUMlYXbyf0Sr9896Tx5uXZbNvIc2L&usqp=CAU" alt=""></div>
						<p class="testimonial">Phasellus vitae suscipit justo. Mauris pharetra feugiat ante id lacinia. Etiam faucibus mauris id tempor egestas. Duis luctus turpis at accumsan tincidunt. Phasellus risus risus, volutpat vel tellus ac, tincidunt fringilla massa. Etiam hendrerit dolor eget rutrum.</p>
						<p class="overview"><b>Michael Holz</b>, Seo Analyst</p>
					</div>
				</div>
				<!-- Carousel controls -->
				<a class="carousel-control left carousel-control-prev" href="#myCarousel" data-slide="prev">
					<i class="fa fa-angle-left"></i>
				</a>
				<a class="carousel-control right carousel-control-next" href="#myCarousel" data-slide="next">
					<i class="fa fa-angle-right"></i>
				</a>
			</div>
  </section>
  <section>
      <!-- Grid row -->
<div class="row">

<!-- Grid column -->
<div class="col-md-12 d-flex justify-content-center mb-5">

  <div class="portfolio">
    <h2>PORTFOLIO</h2>
  </div>

  <p></p>

</div>
<!-- Grid column -->

</div>
<!-- Grid row -->

<!-- Grid row -->
<div class="gallery" id="gallery">

<!-- Grid column -->
<div class="mb-3 pics animation all 2">
  <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(73).jpg" alt="Card image cap">
</div>
<!-- Grid column -->

<!-- Grid column -->
<div class="mb-3 pics animation all 1">
  <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Vertical/mountain1.jpg" alt="Card image cap">
</div>
<!-- Grid column -->

<!-- Grid column -->
<div class="mb-3 pics animation all 1">
  <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Vertical/mountain2.jpg" alt="Card image cap">
</div>
<!-- Grid column -->

<!-- Grid column -->
<div class="mb-3 pics animation all 2">
  <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(35).jpg" alt="Card image cap">
</div>
<!-- Grid column -->

<!-- Grid column -->
<div class="mb-3 pics animation all 2">
  <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(18).jpg" alt="Card image cap">
</div>
<!-- Grid column -->

<!-- Grid column -->
<div class="mb-3 pics animation all 1">
  <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Vertical/mountain3.jpg" alt="Card image cap">
</div>
<!-- Grid column -->

</div>
<!-- Grid row -->
  </section>
  </div>
  <!-- Footer -->
  <footer class="page-footer font-small indigo footer">
  
  <!-- Footer Links -->
  <div class="container text-center text-md-left">

    <!-- Grid row -->
    <div class="row">

      <!-- Grid column -->
      <div class="col-md-3 mx-auto">
          
      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none">

      <!-- Grid column -->
      <div class="col-md-3 mx-auto">

        <!-- Links -->
        <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Links</h5>

        <ul class="list-unstyled">
          <li>
            <a href="#!">Terms and Condition</a>
          </li>
          <li>
            <a href="#!">Privacy Policy</a>
          </li>
          <li>
            <a href="#!">Back to top</a>
          </li>
          <li>
          <button type="button" class="btn" data-toggle="modal" data-target="#myModal"><i class="fas fa-sliders-h fa-2x"></i></button>
          </li>
        </ul>

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none">

      <!-- Grid column -->
      <div class="col-md-3 mx-auto">

        <!-- Links -->
        <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Social Media</h5>

        <ul class="list-unstyled">
          <li>
          <i class="fab fa-facebook"></i><a href="#!"> Facebook</a>
          </li>
          <li>
          <i class="fab fa-twitter"></i><a href="#!"> twitter</a>
          </li>
          <li>
          <i class="fab fa-instagram"></i><a href="#!"> instagram</a>
          </li>
        </ul>

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none">

      <!-- Grid column -->
      <div class="col-md-3 mx-auto">

        <!-- Links -->
        <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Contact Us</h5>

        <ul class="list-unstyled">
          <li>
          <i class="fas fa-phone-alt"></i><a href="#">7815551 / 9862212</a>
          </li>
          <li>
          <i class="fas fa-envelope"></i><a href="#!">phopixofficial@gmail.com</a>
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
    <a href="https://mdbootstrap.com/"> PhoPix.com</a>
  </div>
  <!-- Copyright -->

  </footer>
  <!-- Footer -->

<script src="{{ asset('js/nav.js') }}"></script>
@endsection
