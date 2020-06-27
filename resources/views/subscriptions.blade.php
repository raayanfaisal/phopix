@extends('layouts.app')

@section('content')
<div class="container">
<div class="heading-container text-center" style="margin-top:100px; color: white;">
  <h3>Price calculator</h3>
  <p>Select the features needed and get a price calculated instantly for you</p>
</div>
<div class="form-box">
<form action="" class="calculator_price form-horizontal" id="cakeform" onsubmit="return false;">
<fieldset>

<!-- Form Name -->
<legend style="color: white;">Get an instant quote!</legend>


<!-- Text input-->
<div class="form-group p-2" style="border-bottom: 1px solid white;">
  <label class="col-md-4 control-label" for="textinput">Type of service</label>  
    <select name="tos" id="tos" onchange="calculateTotal()">
      <option value="web">Web development</option>
      <option value="social">Social Media management</option>
      <option value="logo">Logo designing</option>
      <option value="app">Application development</option>
    </select>
</div>

<!-- Text input-->
<div class="form-group p-2" style="border-bottom: 1px solid white;">
  <label class="col-md-4 control-label" for="textinput">Type of website</label>  
    <select name="typeow" id="typeow" onchange="calculateTotal()">
      <option value="e-commerce">E-Commerce</option>
      <option value="commercial">Commercial</option>
      <option value="business">Business</option>
      <option value="portfolio">Portfolio</option>
    </select>
</div>

<!-- Text input-->
<div class="form-group p-2" style="border-bottom: 1px solid white;">
  <label class="col-md-4 control-label" for="textinput">Target platform (if application)</label>  
    <select name="platform" id="platform" onchange="calculateTotal()">
      <option value="apple">iOS</option>
      <option value="google">Apple</option>
      <option value="both">both</option>
    </select>
</div>

<!-- Text input-->
<div class="form-group p-2" style="border-bottom: 1px solid white;">
  <label class="col-md-4 control-label" for="textinput">Type of logo (if logo)</label>  
    <select name="logo" id="logo" onchange="calculateTotal()">
      <option value="mascott">mascott</option>
      <option value="abstract">Abstract</option>
      <option value="comb">combination mark</option>
      <option value="emblem">emblem</option>
      <option value="typo">typography</option>
      <option value="pictorial">pictorial mark</option>
    </select>
</div>

<!-- Text input-->
<div class="form-group p-2" style="border-bottom: 1px solid white;">
  <label class="col-md-4 control-label" for="textinput">Off-site backup</label>  
    <select name="backup" id="backup" onchange="calculateTotal()">
      <option value="one">12 months</option>
      <option value="two">24 months</option>
      <option value="three">36 months</option>
    </select>
</div>

<!-- Text input-->
<div class="form-group p-2" style="border-bottom: 1px solid white;">
  <label class="col-md-4 control-label" for="textinput">Maintanance</label>  
    <select name="maintain" id="maintain" onchange="calculateTotal()">
      <option value="four">12 months</option>
      <option value="five">24 months</option>
      <option value="six">36 months</option>
    </select>
</div>

<div class="radiolabel text-right" id="totalPrice"></div>
</form>
</div>
</div>
<script>

var serv = new Array();
 serv["web"]=0;
 serv["social"]=0;
 serv["logo"]=0;
 serv["app"]=0;
 

 var webtype= new Array();
 webtype["None"]=0;
 webtype["e-commerce"]=30000;
 webtype["commercial"]=20000;
 webtype["business"]=15000;
 webtype["portfolio"]=10000;

 var platform= new Array();
 platform["None"]=0;
 platform["apple"]=1000;
 platform["google"]=500;
 platform["both"]=2000;

 var logo= new Array();
 logo["None"]=0;
 logo["mascott"]=700;
 logo["abstract"]=500;
 logo["comb"]=500;
 logo["emblem"]=600;
 logo["typo"]=300;
 logo["pictorial"]=500;

 var backup= new Array();
 backup["None"]=0;
 backup["one"]=700;
 backup["two"]=500;
 backup["three"]=500;
 
 var maintain= new Array();
 maintain["None"]=0;
 maintain["four"]=700;
 maintain["five"]=500;
 maintain["six"]=500;

function servicePrice()
{
    var servPrice=0;

    var theForm = document.forms["cakeform"];
    var selectedOpt = theForm.elements["tos"];

    servPrice = serv[selectedOpt.value];

    return servPrice;
}

function typePrice()
{
    var typePrice=0;

    var theForm = document.forms["cakeform"];
    var selectedOpt = theForm.elements["typeow"];

    typePrice = webtype[selectedOpt.value];

    return typePrice;
}

function platformPrice()
{
    var platPrice=0;

    var theForm = document.forms["cakeform"];
    var selectedOpt = theForm.elements["platform"];

    platPrice = platform[selectedOpt.value];

    return platPrice;
}

function looPrice()
{
    var logoPrice=0;

    var theForm = document.forms["cakeform"];
    var selectedOpt = theForm.elements["logo"];

    logoPrice = logo[selectedOpt.value];

    return logoPrice;
}

function maintainPrice()
{
    var maintainPrice=0;

    var theForm = document.forms["cakeform"];
    var selectedOpt = theForm.elements["maintain"];

    maintainPrice = maintain[selectedOpt.value];

    return maintainPrice;
}
function backupPrice()
{
    var backupPrice=0;

    var theForm = document.forms["cakeform"];
    var selectedOpt = theForm.elements["backup"];

    backupPrice = backup[selectedOpt.value];

    return backupPrice;
}



function calculateTotal()
{

    var cakePrice = servicePrice() + typePrice() + platformPrice() + looPrice() + maintainPrice() + backupPrice();
    

    var divobj = document.getElementById('totalPrice');
    divobj.style.display='block';
    divobj.innerHTML = "Total Price in MVR "+cakePrice;

}

function hideTotal()
{
    var divobj = document.getElementById('totalPrice');
    divobj.style.display='none';
}


</script>
@endsection
