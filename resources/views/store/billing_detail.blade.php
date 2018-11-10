<!DOCTYPE html>
<html>
<head>    
    <title>billing detail</title> 
    <link rel="stylesheet" type="text/css" href="{{url('bootstrap/bootstrap.css')}}">
     <link rel="stylesheet" type="text/css" href="{{url('bootstrap/bootstrap.css.min')}}">   
</head>
<body>
<div class="col-lg-12">
    <h2 style="text-align: center;">Place Order</h2>
  <div class="container col-lg-6 jumbotron" style="float: left">
  <h2>Shipping Address</h2>
  <p></p>
  <form action="{{url('/placeorder')}}" method="post" enctype="multipart/form-data"> 
    <fieldset>                 
     {{csrf_field()}} 
  <form>
    <div class="form-group">
      <label for="first_name">First Name *:</label>
      <input type="text" name="first_name" class="form-control" id="first_name">
    </div>
    <div class="form-group">
      <label for="last_name">Last Name *:</label>
      <input type="text" name="last_name" class="form-control" id="last_name">
    </div>
    <div class="form-group">
      <label for="company_name">Company Name *</label>
      <input type="text" name="company_name" class="form-control" id="company_name">
    </div>
    <div class="form-group">
      <label for="country">Country</label>
      <input type="text" name="state_country" class="form-control" id="country">
    </div>
    <div class="form-group">
      <label for="town_city">Town/City</label>
      <input type="town_city" name="town_city" class="form-control" id="town_city">
    </div>
    <div class="form-group">
      <label for="street_address">Street Address</label>
      <input type="text" name="street_address" class="form-control" id="street_address">
    </div>
    <div class="form-group">
      <label for="postcode_zip">Postcode /Zip</label>
      <input type="text" name="postcode_zip" class="form-control" id="postcode_zip">
    </div>
    <div class="form-group">
      <label for="state_country">State /Country</label>
      <input type="text" name="state_country" class="form-control" id="state_country">
    </div>
    <div class="form-group">
      <label for="phone">Phone</label>
      <input type="text" name="phone" class="form-control" id="phone">
    </div>
    <div class="form-group">
      <label for="email_address">Email Address</label>
      <input type="email" name="email_address" class="form-control" id="email_address">
    </div>





  <br>
    








   <br>
  <h2>BILLING DETAILS</h2>
<h4>You have selected Payment via Credit Card/ Debit Card </h4>
<br>
<form>
    <div class="form-group">
      <label for="credit_card_no">Credit Card Number:</label>
      <input type="text" name="credit_card_no" class="form-control" id="credit_card_no">
    </div>
    <div class="form-group">
      <label for="card_type">Credit Card Type:</label>
      <input type="text" name="card_type" class="form-control" id="card_type">
    </div>
    <div class="form-group">
      <label for="expiry">Expiry: </label>
      <input type="text" name="expiry" class="form-control" id="expiry">
    </div>
    <div class="form-group">
      <label for="cvv">CVV</label>
      <input type="text" name="cvv" class="form-control" id="cvv">
    </div>
    

</div>


      <div class="container col-lg-6 jumbotron " style="float: right;">
      <h2>Your Order</h2>

        
      <div class="container col-lg-3 jumbotron " style="float: left;">
      <h2> Product</h2>
      <br>
      <br>
      <h5>Subtotal</h5>
      <br>
      <h5>Shipping</h5>
      <br>
      <h5>VAT</h5>
      <br>
      <h5>Total</h5>

      <div class="container col-lg-3 jumbotron " style="float: right;">
            <button type="submit" class="btn btn-primary btn-lg">Place Order</button>
      </div>

      </div>


      <div class="container col-lg-3 jumbotron " style="float: right;">
      <h2> Total</h2>
      <br>
      <br>
      <h5>AED 2568</h5>
      <br>
      <h5>AED 4856</h5>
      <br>
      <h5>AED 6822</h5>
      <br>
      <h5>AED 2579</h5>
      </div>



      </div>
 



</div>
    
</body>
</html>