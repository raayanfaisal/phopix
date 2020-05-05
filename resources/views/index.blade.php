@extends('layouts.app')

@section('content')
<!========== Header Section End ==================>
<section id="banner">
   <div class="container">
     <div class="row">
       <div class="col-md-6">
         <h1><b>Welcome to PhoPix</b></h1>
         <h3>Making it, Simple!</h3>
       </div>
       <div class="col-md-6">
          <a href="https://www.vecteezy.com/free-vector/web-development"><img src="https://raw.githubusercontent.com/raayanfaisal/phopix/master/public/Images/bg.png" alt="vector" class="img-fluid mt-"></a>
       </div>
     </div>
   </div>
</section>
<!========== Header Section End ==================>

<!========== recent work Section End ==================>
<section>
    <div class="container">
      <h2 class="text-center mt-5"><span class="border-bottom border-dark"><b>Our most Recent Work</b></span></h2>
      <p></p>
    </div>
    <div class="card-deck mt-5 ml-5 mr-5">
      <div class="card">
        <img src="https://images.unsplash.com/photo-1526947425960-945c6e72858f?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80" class="card-img-top" alt="...">
      </div>
      <div class="card">
        <img src="https://images.unsplash.com/photo-1522273400909-fd1a8f77637e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1300&q=80" class="card-img-top" alt="...">
      </div>
      <div class="card">
        <img src="https://images.unsplash.com/photo-1506770797561-3b22048d1a13?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1292&q=80" class="card-img-top" alt="...">
      </div>
    </div>
    <div class="text-center">
    <a href="#" class="btn btn-primary btn-lg justify-content-center mt-5">See More</a>
    </div>
  </section>
<!========== Recent work Section End ==================>
<!========== About Us Section End ==================>
<section>
    <div class="container">
      <h1 class="text-center" id="ab"><b>Who are we ?</b></h1>
        <p style="font-size: 20px">Phopix private limited is a company based in the republic of Maldives. And we offer a variety of services, and we strive to do them as near to perfection as we can get . To ensure maximum customer satisfaction in the end . We specialize in HTML5, CSS3, Laravel, MySQL and WordPress for building custom high-end websites that scale well on all your devices </p>
    </div>
</section>
<!========== About Us Section End ==================>
<section>
  <div class="container">
  <div class="">
                <div class="card-group">
                    <div class="card m-2" style="" id="cd">
                        <div class="card-body">
                            <h4 class="card-title"><b>
                              Web design and development.
                            </h4></b>
                            <p>we will design and build for you a high performance  website</p>
                        </div>
                    </div>

                    <div class="card m-2" style="" id="cd">
                        <div class="card-body">
                            <h4 class="card-title"><b>
                              Website Maintanance.
                            </h4></b>
                            <p>We will maintain your existing website and keep it in running condition 24/7</p>
                        </div>
                    </div>
                </div>

                <div class="card-group">
                    <div class="card m-2" style="" id="cd">
                        <div class="card-body">
                            <h4 class="card-title"><b>
                              Application development. 
                            </h4></b>
                            <p>we will build apps that can run on both IOS and Android</p>
                        </div>
                    </div>

                    <div class="card m-2" style="" id="cd">
                        <div class="card-body">
                            <h4 class="card-title"><b>
                              Social media page management.
                            </h4></b>
                            <p>any platform with a affordable price</p>
                        </div>
                    </div>
                </div>

                <div class="card-group">
                    <div class="card m-2" style="" id="cd">
                        <div class="card-body">
                            <h4 class="card-title"><b>
                              Logo Designing 
                            </h4></b>
                            <p>Custom logos that comply with modern trends and is upto your specs</p>
                        </div>
                    </div>

                    <div class="card m-2" style="" id="cd">
                        <div class="card-body">
                            <h4 class="card-title"><b>
                              Website management
                            </h4></b>
                            <p>We will manage your website, uploading picture and making corrections</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>
</section>
@endsection
