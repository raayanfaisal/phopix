@extends('layouts.app')

@section('content')
    <div class="container">
    <header>
          <div class="container mt-2">
           <!-- Navbar-->
                    <nav class="navbar navbar-expand-lg navbar-dark bg-transparent mt-3 mb-4 text-white">
                    <div class="container">
                  
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation" style="border-color: white;">
                          <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarText">
                            <ul class="navbar-nav mr-auto">
                              <li class="nav-item active">
                                <a class="nav-link text-white" href="/">Home</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link text-white" href="">About</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link text-white" href="#porttext">Portfolio</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link text-white" href="/subscriptions">Get a quote</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link text-white" href="/contact">Contact <span class="sr-only">(current)</span></a>
                              </li>
                            </ul>
                        <span class="navbar-text">
                      <img src="/images/phopix.svg" alt="Logo" width="100px" height="100px" style="border-radius: 50%">
                    </span>
                  </div>
                  </div>
                </nav>
            </div>
        </header>
        <div class="row">
            <div class="col-md-6">
                <!====check and give success messege===>
                @if (Session::has('flash_messege')) 
                       <div class="alert alert-primary">{{ Session::get('flash_messege') }}</div> 
                @endif
                <h2 class="mt-4 text-white">Contact Us</h2>
              <form method="post" action="{{ route('contact.store') }}">
                  {{ csrf_field() }}

                  <div class="form-group">
                      <label class="text-white">Full name:</label>
                      <input type="text" class="form-control" id="txtbox" name="name" placeholder="ahmed">
                      <!====Validation===>
                      @if ($errors->has('name'))
                      <small class="form-text invalid-feedback">{{ $errors->first('name') }}</small>
                      @endif
                  </div>

                  <div class="form-group">
                      <label class="text-white">E-mail</label>
                      <input type="text" class="form-control" id="txtbox" name="email" placeholder="example@gmail.com">
                      <!====Validation===>
                      @if ($errors->has('email'))
                      <small class="form-text invalid-feedback">{{ $errors->first('email') }}</small>
                      @endif
                  </div>

                  <div class="form-group">
                      <label class="text-white">messege:</label>
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
    </div>
@endsection
