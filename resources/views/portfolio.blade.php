@extends('layouts.app')

@section('content')
<div class="container-fluid">
<header>
          <div class="container mt-2">
           <!-- Navbar-->
                    <nav class="navbar navbar-expand-lg navbar-light bg-transparent mt-3 mb-4">
                    <div class="container">
                  
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                          <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarText">
                            <ul class="navbar-nav mr-auto">
                              <li class="nav-item active">
                                <a class="nav-link text-white" href="#">Home <span class="sr-only">(current)</span></a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link text-white" href="#us">About</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link text-white" href="#porttext">Portfolio</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link text-white" href="/subscriptions">Get a quote</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link text-white" href="/contact">Contact</a>
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
        <h2 class="text-center text-white"><b>PORTFOLIO</b></h2>
        <p class="text-center text-white mb-5">A full description of our work</p>
<div class="card-columns m-5">
    <div class="card filterDiv">
        <img src="" class="card-img-top" style="width:100%; height: 200px;"/>
    </div>
    <div class="card filterDiv">
        <img src="" class="card-img-top" style="width:100%; height: 500px;"/>
    </div>
    <div class="card filterDiv">
        <img src="" class="card-img-top" style="width:100%; height: 300px;"/>
    </div>
    <div class="card filterDiv logo">
        <img src="/images/Clogo.png" class="card-img-top" style="width:100%; height: autopx;"/>
        <div class="card-img-overlay text-center">
          <h5 class="card-title"><b>Morning Leaque logo</b></h5>
          <p class="card-text">Logo designed and commisioned by PhoPix for Morning Leaque a football leaque by stelco.</p>
          <p class="card-text">Completed on March 14 2020</p>
      </div>
    </div>
    <div class="card filterDiv">
        <img src="" class="card-img-top" style="width:100%; height: 400px;"/>
    </div>
    <div class="card filterDiv">
        <img src="" class="card-img-top" style="width:100%; height: 300px;"/>
    </div>
    <div class="card filterDiv logo">
        <img src="/images/C2logo.png" class="card-img-top" style="width:100%; height: autopx;"/>
    </div>
    <div class="card filterDiv">
        <img class="card-img-top" style="width:100%; height: 200px;"/>
    </div>
    <div class="card filterDiv">
        <img src="" class="card-img-top" style="width:100%; height: 200px;"/>
    </div>
    <div class="card filterDiv web">
        <img src="/images/w3.png" class="card-img-top" style="width:100%; height: autopx;" id="w1"/>
        <div class="card-img-overlay text-center">
          <h5 class="card-title"><b>Website name</b></h5>
          <p class="card-text">Website for so and so Completed on May 7th 2020</p>
          
        </div>
    </div>
    <div class="card">
        <img src="" class="card-img-top" style="width:100%; height: 300px;"/>
</div>
</div>
@endsection