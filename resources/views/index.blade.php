@extends('layouts.app')

@section('content')
<div class="container pt-5 mt-5">
    <div class="row">
        <div class="col-12">
            <h1 class="display-4">
                WELCOME TO PHOPIX
            </h1>
            
            <h4 class="pt-4">Phopix is a web development team based in the republic of Maldives . Currently we are a team of 5 young web developers , <b>Note Site under development</b>  </h4>
                <a href="#cont" class="btn btn-primary btn-lg active m-5" role="button" aria-pressed="true">Hire Us!</a>
            
            <img src="https://raw.githubusercontent.com/raayanfaisal/phopix/master/DEMO.png" alt="Recent work" width="100%" height="500px">
            
        </div>
        
            <div class="col-12 mt-5 pt-5">
                <h2 id="abt">Who are We?</h2>
                <p>
                    Phopix private limited is a company based in the republic of Maldives. And we offer a variety of services, and we strive to do them as near to perfection as we can get . To ensure maximum customer satisfaction in the end . We specialize in HTML5, CSS3, Laravel, MySQL and WordPress for building custom high-end websites that scale well on all your devices 
                </p>
                <h3>Services we offer</h3>
                <ul class="list-group list-group-flush mt-5">
                    <li class="list-group-item">Creating and managing Social media page</li>
                    <li class="list-group-item">Website Designing and Development</li>
                    <li class="list-group-item">Website Management</li>
                </ul>
            </div>
        
        <div class="col-11 pt-5 mt-5">
            <h2 id="port">Some of our recent Works</h2>
            <p class="pt-4">Our work spans from Building high performance sites from scratch to rebuilding existing websites while our work is aesthetically diverse we always strive to make it as user freindly as possible for the end user <b>note as we complete projects we will be adding them here</b>
            </p>
        </div>
    </div>
    <div class="col-12">
        <!-- Default form contact -->
        <form class="text-center border border-light p-5" action="/index">

        <p class="h4 mb-4" id="cont">Hire Us!</p>
        <label>Personal Details</label>
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
</div>
<!-- Footer -->
<footer class="container-fluid page-footer font-small mdb-color lighten-3 pt-4" style="background-color: grey; color: white;">

  <!-- Footer Links -->
  <div class="container text-center text-md-left">

    <!-- Grid row -->
    <div class="row">

      <!-- Grid column -->
      <div class="col-md-4 col-lg-3 mr-auto my-md-4 my-0 mt-4 mb-1">

        <!-- Content -->
        <h5 class="font-weight-bold text-uppercase mb-4">phopix pvt, ltd</h5>
      

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none">

      <!-- Grid column -->
      <div class="col-md-2 col-lg-2 mx-auto my-md-4 my-0 mt-4 mb-1">

        <!-- Links -->
        <h5 class="font-weight-bold text-uppercase mb-4">Usefull Links</h5>

        <ul class="list-unstyled">
          <li>
            <p>
              <a class="text-white" href="#!">FaceBook</a>
            </p>
          </li>
          <li>
            <p>
              <a class="text-white" href="#!">Twitter</a>
            </p>
          </li>
          <li>
            <p>
              <a class="text-white" href="#!">Instagram</a>
            </p>
          </li>
          <li>
            <p>
              <a class="text-white" href="#!">Privacy Policy</a>
            </p>
          </li>
        </ul>

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none">

      <!-- Grid column -->
      <div class="col-md-4 col-lg-3 mx-auto my-md-4 my-0 mt-4 mb-1">

        <!-- Contact details -->
        <h5 class="font-weight-bold text-uppercase mb-4">Contact</h5>

        <ul class="list-unstyled">
          <li>
            <p>
              <i class="fas fa-home mr-3"></i> phopixofficial@gmail.com</p>
          </li>
          <li>
            <p>
              <i class="fas fa-envelope mr-3"></i> 7515551 / 9682212</p>
          </li>

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none">

      <!-- Grid column -->
      <div class="col-md-2 col-lg-2 text-center mx-auto my-4">

        <!-- Social buttons -->
        

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2020 Copyright:
    <a class="text-white" href=""> phopix.com</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->
@endsection
