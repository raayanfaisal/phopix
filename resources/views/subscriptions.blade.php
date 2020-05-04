@extends('layouts.app')

@section('content')
<div class="container">
   <div class="card-group mt-5">
   <div class="card" style="width: 18rem;">
  <div class="card-header">
    <h5><b>Basic plan</b></h5>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">Upto 2 pages.</li>
    <li class="list-group-item">Commercial usage</li>
    <li class="list-group-item">No maintanance</li>
    <li class="list-group-item">Responsive layout</li>
    <li class="list-group-item">Upto 5 revisions</li>
    <li class="list-group-item"><b>$50/month</b></li>
    <li class="list-group-item"><b>$500/year</b></li>
  </ul>
</div>
<div class="card" style="width: 18rem;">
  <div class="card-header">
    <h5><b>Plus plan</b></h5>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">Upto 10 pages.</li>
    <li class="list-group-item">Commercial usage</li>
    <li class="list-group-item">Custom logo</li>
    <li class="list-group-item">Website updates</li>
    <li class="list-group-item">upto 2 month maintanance</li>
    <li class="list-group-item">Responsive layout</li>
    <li class="list-group-item">Design customization</li>
    <li class="list-group-item"><b>$90/month</b></li>
    <li class="list-group-item"><b>$1000/year</b></li>
  </ul>
</div>
<div class="card" style="width: 18rem;">
  <div class="card-header">
    <h5><b>Premium plan</b></h5>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">Upto 15 pages.</li>
    <li class="list-group-item">Commercial usage</li>
    <li class="list-group-item">Responsive layouts</li>
    <li class="list-group-item">Upto 15 month maintance</li>
    <li class="list-group-item">Design customization</li>
    <li class="list-group-item">Website updates</li>
    <li class="list-group-item">Custom logo</li>
    <li class="list-group-item">E-Commerce Functions</li>
    <li class="list-group-item"><b>$150/month</b></li>
    <li class="list-group-item"><b>$1700/year</b></li>
  </ul>
</div>
   </div>
   <div class="text-center mt-5">
     <a href="https://forms.gle/nw8qGu4n3gCEH1Mp9" class="btn btn-primary btn-lg">Continue</a>
   </div>
</div>
@endsection
