@extends('layouts.app')

@section('content')
<div class="container mt-5">
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
<h1>
    Terms and Condition
</h1>
<h2>
    1 . terms
</h2>
<p>
By accessing this web site, you are agreeing to be bound by these web site Terms and Conditions of Use, all applicable laws and regulations, and agree that you are responsible for compliance with any applicable local laws. If you do not agree with any of these terms, you are prohibited from using or accessing this site. The materials contained in this web site are protected by applicable copyright and trade mark law.
</p>
<h2>
    2 . User interface
</h2>
<p>
a. Permission is granted to temporarily download one copy of the materials (information or software) on Company's web site for personal, non-commercial transitory viewing only. This is the grant of a license, not a transfer of title, and under this license you may not:
</p>
<ul>
    <li>Modify or copy the materials</li>
    <li>use the materials for any commercial purpose, or for any public display (commercial or non-commercial)</li>
    <li>attempt to decompile or reverse engineer any software contained on Company's web site</li>
    <li>iv.	remove any copyright or other proprietary notations from the materials; or
        v.	transfer the materials to another person or 'mirror' the materials on any other server.
    </li>
</ul>
<p>
b.	This license shall automatically terminate if you violate any of these restrictions and may be terminated by Company at any time. Upon terminating your viewing of these materials or upon the termination of this license, you must destroy any downloaded materials in your possession whether in electronic or printed format
</p>
<h2>
    Disclaimer
</h2>
<p>
    The materials on Company's web site are provided 'as is'. Company makes no warranties, expressed or implied, and hereby disclaims and negates all other warranties, including without limitation, implied warranties or conditions of merchantability, fitness for a particular purpose, or non-infringement of intellectual property or other violation of rights. Further, Company does not warrant or make any representations concerning the accuracy, likely results, or reliability of the use of the materials on its Internet web site or otherwise relating to such materials or on any sites linked to this site.
</p>
<h2>
    limitation
</h2>
<p>
In no event shall Company or its suppliers be liable for any damages (including, without limitation, damages for loss of data or profit, or due to business interruption,) arising out of the use or inability to use the materials on Company's Internet site, even if Company or a Company authorized representative has been notified orally or in writing of the possibility of such damage. Because some jurisdictions do not allow limitations on implied warranties, or limitations of liability for consequential or incidental damages, these limitations may not apply to you.
</p>
<h2>
    Revision and Errata
</h2>
<p>
The materials appearing on Company's web site could include technical, typographical, or photographic errors. Company does not warrant that any of the materials on its web site are accurate, complete, or current. Company may make changes to the materials contained on its web site at any time without notice. Company does not, however, make any commitment to update the materials. 
</p>
<h2>
    Site terms of use modification
</h2>
<p>
Company may revise these terms of use for its web site at any time without notice. By using this web site, you are agreeing to be bound by the then current version of these Terms and Conditions of Use.

8.	Governing Law

         Any claim relating to Company's web site shall be governed by the laws of the State of without regard to its conflict of law provisions.
 
  General Terms and Conditions applicable to Use of a Web Site.


</p>
</div>
<div class="container-fluid">
<!-- Footer -->
<footer class="page-footer font-small special-color-dark pt-4" style="" id="ft"> 

  <!-- Footer Elements -->
  <div class="container">
    <div class="text-center mb-2">
          <a href="" class="text-info">Privacy Policy |</a>

          <a href="" class="text-info">Terms and Condition's |</a>

          <a href="#" class="text-info">Back to Top </a>
      </div>
    <!-- Social buttons -->
    <ul class="list-unstyled list-inline text-center">
      <li class="list-inline-item">
        <a class="btn-floating btn-fb mx-1">
          <a href=""></a><i class="fab fa-facebook-f" id="ci"></i>
        </a>
      </li>
      <li class="list-inline-item">
        <a class="btn-floating btn-tw mx-1">
          <i class="fab fa-twitter" id="ci"></i>
        </a>
      </li>
      <li class="list-inline-item">
        <a class="btn-floating btn-gplus mx-1">
          <i class="fab fa-instagram" id="ci"></i>
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
<script src="{{ asset('js/nav.js') }}"></script>
</div>  
@endsection
