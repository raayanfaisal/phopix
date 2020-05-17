@extends('layouts.app')

@section('content')
<div class="container">
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
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2 class="text-white" id="suu">Price Calculator</h2>
                <p class="text-white">Calculate prices of the services you require</p>
                <a href="#" class="btn btn-lg btn-primary">Continue</a>
            </div>

            <div class="col-md-6">
            <div id="wrp">
            <form action="" class="text-white" id="cakeform" onsubmit="return false;">
        <div>
            <div class="cont_order">
               <fieldset>
                <legend>Calculate the cost</legend>
                <label >Type of website</label><br>
                <label class='radiolabel'><input type="radio"  name="selectedcake" value="Round6" onclick="calculateTotal()" />E-Commerce Website</label><br/>
                <label class='radiolabel'><input type="radio"  name="selectedcake" value="Round8" onclick="calculateTotal()" />Cooperate Website</label><br/>
                <label class='radiolabel'><input type="radio"  name="selectedcake" value="Round10" onclick="calculateTotal()" />Business Website</label><br/>
                <label class='radiolabel'><input type="radio"  name="selectedcake" value="Round12" onclick="calculateTotal()" />Portfolio Website</label><br/>
                <br/>

                <label >Maintanace</label><br>
         
                <select id="filling" name='filling' onchange="calculateTotal()">
                <option value="None">Select your option</option>
                <option value="Lemon">12 months(2500/m)</option>
                <option value="Custard">24 months(2000/m)</option>
                <option value="Fudge">36 months(1500/m)</option>
               </select>
                <br/>
                <p>
                <label for='includecandles' class="inlinelabel">Database Management</label>
               <input type="checkbox" id="includecandles" name='includecandles' onclick="calculateTotal()" />
               </p>
               
                <p>
                <label class="inlinelabel" for='includeinscription'>Custom payment gateway</label>
                <input type="checkbox" id="includeinscription" name="includeinscription" onclick="calculateTotal()" />
                
                </p>
                <div id="totalPrice"></div>
                
                </fieldset>
            </div>
       </form>
       </div>
            </div>
        </div>
    </div>
    <script>
     /*
This source is shared under the terms of LGPL 3
www.gnu.org/licenses/lgpl.html

You are free to use the code in Commercial or non-commercial projects
*/

 //Set up an associative array
 //The keys represent the size of the cake
 //The values represent the cost of the cake i.e A 10" cake cost's $35
 var cake_prices = new Array();
 cake_prices["Round6"]=21000;
 cake_prices["Round8"]=16000;
 cake_prices["Round10"]=13000;
 cake_prices["Round12"]=11000;
 
 //Set up an associative array 
 //The keys represent the filling type
 //The value represents the cost of the filling i.e. Lemon filling is $5,Dobash filling is $9
 //We use this this array when the user selects a filling from the form
 var filling_prices= new Array();
 filling_prices["None"]=0;
 filling_prices["Lemon"]=2500;
 filling_prices["Custard"]=2000;
 filling_prices["Fudge"]=1500;
 
	 
	 
// getCakeSizePrice() finds the price based on the size of the cake.
// Here, we need to take user's the selection from radio button selection
function getCakeSizePrice()
{  
    var cakeSizePrice=0;
    //Get a reference to the form id="cakeform"
    var theForm = document.forms["cakeform"];
    //Get a reference to the cake the user Chooses name=selectedCake":
    var selectedCake = theForm.elements["selectedcake"];
    //Here since there are 4 radio buttons selectedCake.length = 4
    //We loop through each radio buttons
    for(var i = 0; i < selectedCake.length; i++)
    {
        //if the radio button is checked
        if(selectedCake[i].checked)
        {
            //we set cakeSizePrice to the value of the selected radio button
            //i.e. if the user choose the 8" cake we set it to 25
            //by using the cake_prices array
            //We get the selected Items value
            //For example cake_prices["Round8".value]"
            cakeSizePrice = cake_prices[selectedCake[i].value];
            //If we get a match then we break out of this loop
            //No reason to continue if we get a match
            break;
        }
    }
    //We return the cakeSizePrice
    return cakeSizePrice;
}

//This function finds the filling price based on the 
//drop down selection
function getFillingPrice()
{
    var cakeFillingPrice=0;
    //Get a reference to the form id="cakeform"
    var theForm = document.forms["cakeform"];
    //Get a reference to the select id="filling"
     var selectedFilling = theForm.elements["filling"];
     
    //set cakeFilling Price equal to value user chose
    //For example filling_prices["Lemon".value] would be equal to 5
    cakeFillingPrice = filling_prices[selectedFilling.value];

    //finally we return cakeFillingPrice
    return cakeFillingPrice;
}

//candlesPrice() finds the candles price based on a check box selection
function candlesPrice()
{
    var candlePrice=0;
    //Get a reference to the form id="cakeform"
    var theForm = document.forms["cakeform"];
    //Get a reference to the checkbox id="includecandles"
    var includeCandles = theForm.elements["includecandles"];

    //If they checked the box set candlePrice to 5
    if(includeCandles.checked==true)
    {
        candlePrice=500;
    }
    //finally we return the candlePrice
    return candlePrice;
}

function insciptionPrice()
{
    //This local variable will be used to decide whether or not to charge for the inscription
    //If the user checked the box this value will be 20
    //otherwise it will remain at 0
    var inscriptionPrice=0;
    //Get a refernce to the form id="cakeform"
    var theForm = document.forms["cakeform"];
    //Get a reference to the checkbox id="includeinscription"
    var includeInscription = theForm.elements["includeinscription"];
    //If they checked the box set inscriptionPrice to 20
    if(includeInscription.checked==true){
        inscriptionPrice=1000;
    }
    //finally we return the inscriptionPrice
    return inscriptionPrice;
}
        
function calculateTotal()
{
    //Here we get the total price by calling our function
    //Each function returns a number so by calling them we add the values they return together
    var cakePrice = getCakeSizePrice() + getFillingPrice() + candlesPrice() + insciptionPrice();
    
    //display the result
    var divobj = document.getElementById('totalPrice');
    divobj.style.display='block';
    divobj.innerHTML = "Total Price MVR"+cakePrice;

}

function hideTotal()
{
    var divobj = document.getElementById('totalPrice');
    divobj.style.display='none';
}
    </script>
</div>
@endsection
