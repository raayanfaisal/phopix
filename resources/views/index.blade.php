@extends('layouts.app')

@section('content')
<!========== Header Section End ==================>
<section id="banner">
   <div class="container" id="cont">
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
     <div class="row">
       <div class="col-md-6">
         <h1 class="text-white"><b>Welcome to <span><b>PhoPix</b></span></b></h1>
         <h3 class="text-white">Making it, Simple!</h3>
         <a href="" class="btn btn-lg btn-primary text-white mt-3" id="button">See More</a>
       </div>
       <div class="col-md-6">
       </div>
     </div>
   </div>
</section>
<!========== Header Section End ==================>
<!========== About Us Section End =====================>
<section  id="us">
  <div class="container">
    <div class="row">
      <div class="col-md-6" id="su">
        <h2 class="text-white mt-5" style="text-decoration: underline; "><b>ABOUT US</b></h2>
      </div>

      <div class="col-md-6" id="su">
        <p class="text-white" style="font-size: 20px;">Phopix private limited is a company based in the republic of Maldives. And we offer a variety of services, and we strive to do them as near to perfection as we can get . To ensure maximum customer satisfaction in the end . We specialize in HTML5, CSS3, Laravel, MySQL and WordPress for building custom high-end websites that scale well on all your devices.</p>
      </div>
    </div>

    <div class="row">
      <div class="col-md-6" id="su">
        <h2 class="text-white mt-5" style="text-decoration: underline; "><b>WE GUARANTEE</b></h2>
      </div>

      <div class="col-md-6" id="su">
        <p class="text-white" style="font-size: 20px;">Following the rules of UI/UX Design to design and develop high perfomance great looking websites for any purpose. Weather it be a E-Commerce website or a Portfolio website you can count on us to get the job done on time and at the same time with quality in mind.</p>
      </div>
    </div>
  </div>
</section>

<!========== About Us Section End ==================>
<section id="serv">
  <div class="container">
  <div class="row">
      <div class="col-md-6">
          <h2 class="text-white" id="service"><b>Our services</b></h2>
          <p class="text-white" style="font-size: 20px">The services we offer are listed here and if you have any questions about them please contact us we will be happy to answer</p>
      </div>

      <div class="col-md-6">
        <div class="card-group">
          <div class="card m-1" style="background-color: #0C0C0C; ">
          <img src="/images/test.svg" alt="" width="100px" height="100px">
            <div class="card-content">
            <p class="text-white text-center">Web development</p>
            </div>
          </div>
          <div class="card m-1" style="background-color: #0C0C0C; ">
          <img src="/images/test.svg" alt="" width="100px" height="100px">
            <div class="card-content">
            <p class="text-white text-center">Logo designing</p>
            </div>
          </div>
          <div class="card m-1" style="background-color: #0C0C0C; ">
          <img src="/images/test.svg" alt="" width="100px" height="100px">
            <div class="card-content">
            <p class="text-white text-center">Application development</p>
            </div>
          </div>
        </div>
        <div class="card-group" >
          <div class="card m-1" style="background-color: #0C0C0C; ">
          <img src="/images/test.svg" alt="" width="100px" height="100px">
            <div class="card-content">
            <p class="text-white text-center">Website maintanance</p>
            </div>
          </div>
          <div class="card m-1" style="background-color: #0C0C0C; ">
          <img src="/images/test.svg" alt="" width="100px" height="100px">
            <div class="card-content">
            <p class="text-white text-center">Social media management</p>
            </div>
          </div>
          <div class="card m-1" style="background-color: #0C0C0C; ">
          <img src="/images/test.svg" alt="" width="100px" height="100px">
            <div class="card-content">
            <p class="text-white text-center">Web designing</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!========== recent work Section End ==================>
<section id="port">
<div class="container">
  <div class="row">
    <div class="col-md-6">
        <h2 class="text-white" id="porttext"><b>OUR PORTFOLIO</b></h2>
        <p class="text-white">Our work spans building high performance websites to managing your social media pages. While our work is aesthetically diverse, we always strive to make it as user freindly as possible for the end user.</p>
        <a href="#" class="btn btn-primary btn-lg">See more</a>
    </div>
    <div class="col-md-6">
    <div class="card-columns mt-5">
    <div class="card">
        <img src="https://raw.githubusercontent.com/raayanfaisal/phopix/master/public/Images/Clogo.png" class="card-img-top" style="width:100%; height: autopx;"/>
    </div>
    <div class="card">
        <img src="https://raw.githubusercontent.com/raayanfaisal/phopix/master/public/Images/C2logo.PNG" class="card-img-top" style="width:100%; height: autopx;"/>
    </div>
    <div class="card">
        <img src="https://raw.githubusercontent.com/raayanfaisal/phopix/master/public/Images/w3.png" class="card-img-top" style="width:auto; height: 500px;"/>
    </div>
  </div>
</div>
</section>
<!========== Recent work Section End ==================>
@endsection
