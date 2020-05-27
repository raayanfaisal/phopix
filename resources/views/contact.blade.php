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
      <a href="/">ABOUT</a>
      <a href="/">SUBSCRIPTIONS</a>
      <a href="/contact">CONTACT</a>
      <!-- Default checked -->
    </div>

    </div>

    <!-- Use any element to open/show the overlay navigation menu -->
    <span onclick="openNav()"><i class="fas fa-bars fa-2x mt-4"></i></span>
    <img src="/images/phopix.svg" alt="phopix-logo" width="60px" height="60px" class="pull-right mt-2">
  </header>
        <div class="row">
            <div class="col-md-6">
                <!====check and give success messege===>
                @if (Session::has('flash_messege')) 
                       <div class="alert alert-primary">{{ Session::get('flash_messege') }}</div> 
                @endif
                <h2 class="mt-4">Contact Us</h2>
              <form method="post" action="{{ route('contact.store') }}">
                  {{ csrf_field() }}

                  <div class="form-group">
                      <label class="">Full name:</label>
                      <input type="text" class="form-control" id="txtbox" name="name" placeholder="ahmed">
                      <!====Validation===>
                      @if ($errors->has('name'))
                      <small class="form-text invalid-feedback">{{ $errors->first('name') }}</small>
                      @endif
                  </div>

                  <div class="form-group">
                      <label class="">E-mail</label>
                      <input type="text" class="form-control" id="txtbox" name="email" placeholder="example@gmail.com">
                      <!====Validation===>
                      @if ($errors->has('email'))
                      <small class="form-text invalid-feedback">{{ $errors->first('email') }}</small>
                      @endif
                  </div>

                  <div class="form-group">
                      <label class="">messege:</label>
                      <textarea name="details" class="form-control" id="txtbox" cols="30" rows="10" name="details"></textarea>
                      <!====Validation===>
                      @if ($errors->has('details'))
                      <small class="form-text invalid-feedback">{{ $errors->first('details') }}</small>
                      @endif
                  </div>

                  <button class="btn btn-lg btn-primary">Submit now</button>
              </form>
            </div>

            <div class="col-md-6">
              
            </div>
        </div>
        <script src="{{ asset('js/nav.js') }}"></script>
    </div>
@endsection
