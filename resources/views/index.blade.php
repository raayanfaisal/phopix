@extends('layouts.app')

@section('content')
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<div class="container pt-5 mt-5">
    <div class="row">
        <div class="col-12">
            <h1 class="display-4">
                WELCOME TO PHOPIX
            </h1>
            
            <h4 class="pt-4">phopix is a web development team based in the republic of maldives currently we are a team of 5 young web developers note: Site in development </h4>
                <a href="#cont" class="btn btn-primary btn-lg active m-5" role="button" aria-pressed="true">Hire Us!</a>
            
            <img src="https://raw.githubusercontent.com/raayanfaisal/phopix/master/DEMO.png" alt="Recent work" width="100%" height="500px">
            
        </div>
        
            <div class="col-12 mt-5 pt-5">
                <h2 id="abt">Who are We?</h2>
                <p>
                    Phopix pvt ltd is a company based in the republic of maldives. And we offer a variety of services and we strive to do them as near to perfection as we can get to ensure 100% customer satisfaction in the end
                    we specialize in HTML5 CSS3 Laravel MySQL WordPress for building custom high end websites that scale well on all your devices
                </p>
                <h3>Services we offer</h3>
                <ul class="list-group list-group-flush mt-5">
                    <li class="list-group-item">Service 1</li>
                    <li class="list-group-item">Service 2</li>
                    <li class="list-group-item">Service 3</li>
                    <li class="list-group-item">Service 4</li>
                    <li class="list-group-item">Service 5</li>
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
<!-- Footer -->
<footer class="page-footer font-small ">

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">
            Website Under development<br><a href="" class="ml-3"><img src="https://raw.githubusercontent.com/raayanfaisal/phopix/master/public/Images/06-facebook-512.png" alt="" width="20px" height="20px"></a>
    <a href="" class="ml-3"><img src="https://raw.githubusercontent.com/raayanfaisal/phopix/master/public/Images/twitter.png" alt="" width="20px" height="20px"></a>
    <a href="" class="ml-3"><img src="https://raw.githubusercontent.com/raayanfaisal/phopix/master/public/Images/insta.png" alt="" width="30px" height="30px"></a></br><br>
    phopixofficial@gmail.com</br><br>
    +9607815551/9682212

  </div>
  
  <!-- Copyright -->

</footer>
<!-- Footer -->
</div>

@endsection
