@extends('layouts.app')

@section('content')
<!========== Header Section End ==================>
<section id="banner">
   <div class="container">
     <div class="row">
       <div class="col-md-6">
         <h1><b>Welcome to phopix</b></h1>
         <h3>Making it, Simple!</h3>
       </div>
       <div class="col-md-6">
          <a href="https://www.vecteezy.com/free-vector/web-development"><img src="https://raw.githubusercontent.com/raayanfaisal/phopix/master/public/Images/bg.png" alt="vector" class="img-fluid mt-"></a>
       </div>
     </div>
   </div>
</section>
<!========== Header Section End ==================>
<!========== About Us Section End =====================>
<section>
    <div class="container">
      <h1 class="text-center"><b>Who are we ?</b></h1>
        <p style="font-size: 20px">Phopix private limited is a company based in the republic of Maldives. And we offer a variety of services, and we strive to do them as near to perfection as we can get . To ensure maximum customer satisfaction in the end . We specialize in HTML5, CSS3, Laravel, MySQL and WordPress for building custom high-end websites that scale well on all your devices </p>
        <p style="font-size: 20px">Following the rules of UI/UX Design to design and develop high perfomance great looking websites for any purpose. Weather it be a E-Commerce website or a Portfolio website you can count on us to get the job done on time and at the same time with quality in mind.</p>
    </div>
</section>
<section>
  <div class="text-center mt-5 pt-5" id="gh1">
    <h2><b>We Gurantee!</b></h2>
  </div>
  <div class="container">
      <p style="font-size: 20px">We at PhoPix Gurantee you the client 3 main things. Firstly 100% run time, Websites made by us will be in running condition 24/7 . Secondly we guantantee security our websites uses 256bit encryption and CSRF token to ensure the security of the website and the users of the website and to ensure it stays ahead of the increasing dangers of the cyber world. Thirdly we gurantee our services will be fininshes on time.</p>     
  </div>
  </div>
</section>
<!========== About Us Section End ==================>
<section id="">
  <div class="container">
   <div class="text-center mt-5 mb-5">
     <h1><b>Our Services</b></h1>
   </div> 
   <div class="card-deck">
      <div class="card">
        
        <div class="card-body">
          <h5 class="card-title"><b>Website design and development</b></h5>
          <p class="card-text">Designing and building custom high-end websites for any purpose</p>
          
        </div>
      </div>
      <div class="card">
        
        <div class="card-body">
          <h5 class="card-title"><b>Website maintanance</b></h5>
          <p class="card-text">Maintanance of exisiting websites such as doing off site backup making sure its in running conditon 24/7</p>
          
        </div>
      </div>
      <div class="card">
        
        <div class="card-body">
          <h5 class="card-title"><b>Application development</b></h5>
          <p class="card-text">Development of apps that support iOS and Android and windows and MacOS</p>
          
        </div>
      </div>
  </div>

  <div class="card-deck">
      <div class="card mt-5">
        
        <div class="card-body">
          <h5 class="card-title"><b>Social media page management</b></h5>
          <p class="card-text">Managing of social media pages, like facebook, twitter, instagram</p>
          
        </div>
      </div>
      <div class="card mt-5">
        
        <div class="card-body">
          <h5 class="card-title"><b>Logo designing</b></h5>
          <p class="card-text">Designing of logos that meet your spec</p>
          
        </div>
      </div>
      <div class="card mt-5">
        
        <div class="card-body">
          <h5 class="card-title"><b>Website management</b></h5>
          <p class="card-text">Manageing of exisiting websites, such as making corrections, uploading pictures.</p>
          
        </div>
      </div>
  </div>
</section>
<!========== recent work Section End ==================>
<section>
<div class="container mt-5">
<div class="text-center mb-4">
    <h1><b>Portfolio</b></h1>
    <p class="mb-5">Our work spans from building high-end websites from scratch to rebuilding existing websites. While our work is aestheticaslly diverse we always strive to make it as user freindly as possible for the end user .</p>
</div>
<div class="card-columns">
    <div class="card">
        <img src="" class="card-img-top" style="width:100%; height: 200px;"/>
    </div>
    <div class="card">
        <img src="" class="card-img-top" style="width:100%; height: 500px;"/>
    </div>
    <div class="card">
        <img src="" class="card-img-top" style="width:100%; height: 300px;"/>
    </div>
    <div class="card">
        <img src="https://raw.githubusercontent.com/raayanfaisal/phopix/master/public/Images/Clogo.png" class="card-img-top" style="width:100%; height: 380px;"/>
        <div class="card-img-overlay text-center">
          <h5 class="card-title"><b>Morning Leaque logo</b></h5>
          <p class="card-text">Logo designed and commisioned by PhoPix for Morning Leaque a football leaque by stelco.</p>
          <p class="card-text">Completed on March 14 2020</p>
      </div>
    </div>
    <div class="card">
        <img src="" class="card-img-top" style="width:100%; height: 400px;"/>
    </div>
    <div class="card">
        <img src="" class="card-img-top" style="width:100%; height: 300px;"/>
    </div>
  </section>
<!========== Recent work Section End ==================>
@endsection
