@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card-group mt-5">
    <div class="card" style="width: 18rem;" id="cd">
 
  <div class="card-body">
    <h2 class="card-title">Basic Plan</h2>
    <h2 class="card-title">$50<small>/month</small></h2>
    <h2 class="card-title">$500<small>/year</small></h2>
    
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item" style="background-color: #F2F5F7;">Upto 2 pages</li>
    <li class="list-group-item" style="background-color: #F2F5F7;">Commercial usage</li>
    <li class="list-group-item" style="background-color: #F2F5F7;">5 revisions</li>
    <li class="list-group-item" style="background-color: #F2F5F7;">No maintanance</li>
    <li class="list-group-item" style="background-color: #F2F5F7;">Custom Logo</li>
    <li class="list-group-item" style="background-color: #F2F5F7;">Responsive Layout</li>
  </ul>
  <div class="card-body">
  <a href="https://forms.gle/QoqUikZYCKy9PrKd9" class="btn" id="button">Choose plan</a>
  </div>
</div>
<div class="card" style="width: 18rem;" id="cd">
  
  <div class="card-body">
    <h2 class="card-title">Plus Plan</h2>
    <h2 class="card-title">$90<small>/month</small></h2>
    <h2 class="card-title">$1000<small>/year</small></h2>
    
  </div>
  <ul class="list-group list-group-flush" style=" ">
    <li class="list-group-item" style="background-color: #F2F5F7;">upto 5 pages</li>
    <li class="list-group-item" style="background-color: #F2F5F7; ">Commecial and personal usage</li>
    <li class="list-group-item" style=" background-color: #F2F5F7;">Upto 10 revisions</li>
    <li class="list-group-item" style=" background-color: #F2F5F7;">2 month maintanance</li>
    <li class="list-group-item" style=" background-color: #F2F5F7;">Design customization</li>
    <li class="list-group-item" style="background-color: #F2F5F7; ">Website updates</li>
    <li class="list-group-item" style="background-color: #F2F5F7; ">responsive designs</li>
  </ul>
  <div class="card-body">
    <a href="https://forms.gle/QoqUikZYCKy9PrKd9" class="btn " id="button">Choose plan</a>
  </div>
</div>
<div class="card" style="width: 18rem;" id="cd">
 
  <div class="card-body">
    <h2 class="card-title">Premium Plan</h2>
    <h2 class="card-title">$150<small>/month</small></h2>
    <h2 class="card-title">$1700<small>/year</small></h2>
    
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item" style="background-color: #F2F5F7;">upto 15 pages</li>
    <li class="list-group-item" style="background-color: #F2F5F7;">Commercial and Personal Licence</li>
    <li class="list-group-item" style="background-color: #F2F5F7;">Fully resposive</li>
    <li class="list-group-item" style="background-color: #F2F5F7;">E-Commerce Functions</li>
    <li class="list-group-item" style="background-color: #F2F5F7;">Content Uploads</li>
    <li class="list-group-item" style="background-color: #F2F5F7;">Website updates</li>
    <li class="list-group-item" style="background-color: #F2F5F7;">5 months maintanance</li>
    <li class="list-group-item" style="background-color: #F2F5F7;">15 revisions</li>
  </ul>
  <div class="card-body">
    <a href="https://forms.gle/QoqUikZYCKy9PrKd9" class="btn" id="button">Choose plan</a>
  </div>
</div>
    </div>
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
  <div class="footer-copyright text-center py-3">7815551 / 9682212
  </div>
  <div class="footer-copyright text-center py-3">© 2020 Copyright:
    <a href="" style="" class="text-info"> phopix.com</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->
</div>
<!-- Footer -->
</div>
@endsection
