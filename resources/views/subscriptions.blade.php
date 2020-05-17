@extends('layouts.app')

@section('content')
<div class="container">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h2 id="suu" class="text-white"><b>Calculate</b></h2>
          <p class="text-white">Calculate the cost of your desired service</p>
          <p class="text-white"><small>Website maintanance and off-site backup cost is per month more info email us.</small></p>
          <a href="#" class="btn btn-lg btn-primary">Continue</a>
        </div>
        <div class="col-md-6">
          <div id="wrp">
          <form action="" id="cakeform" onsubmit="return false;" class="text-white">
        <div>
            <div class="cont_order">
               <fieldset>
                <legend><b>Pick your options</b></legend>
                <label >Number of pages: </label>
                <label class='radiolabel'><input type="radio"  name="selectedcake" value="Round6" onclick="calculateTotal()" />15 Pages</label><br/>
                <label class='radiolabel'><input type="radio"  name="selectedcake" value="Round8" onclick="calculateTotal()" />20 Pages</label><br/>
                <label class='radiolabel'><input type="radio"  name="selectedcake" value="Round10" onclick="calculateTotal()" />25 Pages</label><br/>
                <label class='radiolabel'><input type="radio"  name="selectedcake" value="Round12" onclick="calculateTotal()" />30 Pages</label><br/>
                <br/>
                
                <label >Off-site backup / Maintanace: </label><br>
         
                <select id="filling" name='filling' onchange="calculateTotal()">
                <option value="None">select your backup option</option>
                <option value="Lemon">12 months</option>
                <option value="Custard">24 months</option>
                <option value="Fudge">36 months</option>
               </select>
                <br/>
                <p>
                <label for='includecandles' class="inlinelabel">Include Payment Gateway ( BML ): </label>
               <input type="checkbox" id="includecandles" name='includecandles' onclick="calculateTotal()" />
               </p>
               
                <p>
                <label class="inlinelabel" for='includeinscription'>Database Connection: </label>
                <input type="checkbox" id="includeinscription" name="includeinscription" onclick="calculateTotal()" />
                </p>
                <div id="totalPrice"><b></b></div>
                
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
 cake_prices["Round6"]=1500;
 cake_prices["Round8"]=2000;
 cake_prices["Round10"]=2500;
 cake_prices["Round12"]=3000;
 
 //Set up an associative array 
 //The keys represent the filling type
 //The value represents the cost of the filling i.e. Lemon filling is $5,Dobash filling is $9
 //We use this this array when the user selects a filling from the form
 var filling_prices= new Array();
 filling_prices["None"]=0;
 filling_prices["Lemon"]=5000;
 filling_prices["Custard"]=4000;
 filling_prices["Fudge"]=3000;
 
	 
	 
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
        inscriptionPrice=20;
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
    divobj.innerHTML = "Total Price For your services MVR"+cakePrice;

}

function hideTotal()
{
    var divobj = document.getElementById('totalPrice');
    divobj.style.display='none';
}
    </script>
</div>
@endsection
