<!DOCTYPE html>
<html>
<head>
    <title>add to cart</title>  
    <link rel="stylesheet" type="text/css" href="{{url('bootstrap/bootstrap.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('bootstrap/bootstrap.css.min')}}">

    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
</head>
<body>
<br>
<div class="container col-lg-12 jumbotron">
    <h3 style="text-align: center; color: blue" >Add To Cart</h3> 
            <table class="table table-hover table-bordered">
              <thead>
                <tr>
                  <th scope="col">Product Name</th>
                  <th scope="col">Qunatity</th>      
                  <th scope="col">Price</th>        
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>{{$product->product_title}}</td>
                  <td><input type="number"name="quantity" value="" min="0"></td>
                  <td>{{$product->price}}</td>        
                </tr>      
              </tbody>
          </table>

      <div class="jumbotron" style="float: right;">
        <h4>Total Price:{{$product->price}}</h4>
        <h4>VAT:</h4>
        <h4>Courier Charges:</h4>
          <h4>Grand Total:</h4>
<!-- Trigger the modal with a button -->
<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#modal{{ $product->id }}">Place Order</button>

 <!-- The Modal -->
 <div class="modal fade" id="modal{{ $product->id }}">
  <form method="POST" action="{{ url('placeorder/'.$product->id) }}"  enctype="multipart/form-data">
   {{ csrf_field() }}
      <div class="modal-dialog modal-lg">
           <div class="modal-content">

              <!-- Modal Header -->
              <div class="modal-header">
                <h4 class="modal-title">Billing Details</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>
        
              <!-- Modal body -->
              <div class="modal-body">
              <label for="first_name">First Name *:</label>
          <input type="text" name="first_name" class="form-control" id="first_name">
          <label for="last_name">Last Name *:</label>
          <input type="text" name="last_name" class="form-control" id="last_name">
          <label for="company_name">Company Name *</label>
          <input type="text" name="company_name" class="form-control" id="company_name">
          <label for="country">Country</label>
          <input type="text" name="state_country" class="form-control" id="country">
          <label for="town_city">Town/City</label>
          <input type="town_city" name="town_city" class="form-control" id="town_city">
          <label for="street_address">Street Address</label>
          <input type="text" name="street_address" class="form-control" id="street_address">
          <label for="postcode_zip">Postcode /Zip</label>
          <input type="text" name="postcode_zip" class="form-control" id="postcode_zip">
          <label for="state_country">State /Country</label>
          <input type="text" name="state_country" class="form-control" id="state_country">
          <label for="phone">Phone</label>
          <input type="text" name="phone" class="form-control" id="phone">
          <label for="email_address">Email Address</label>
          <input type="email" name="email_address" class="form-control" id="email_address">
          <h2>BILLING DETAILS</h2>
          <h4>You have selected Payment via Credit Card/ Debit Card </h4>
          <label for="credit_card_no">Credit Card Number:</label>
          <input type="text" name="credit_card_no" class="form-control" id="credit_card_no">
          <label for="card_type">Credit Card Type:</label>
          <input type="text" name="card_type" class="form-control" id="card_type">
          <label for="expiry">Expiry: </label>
          <input type="text" name="expiry" class="form-control" id="expiry">
          <label for="cvv">CVV</label>
          <input type="text" name="cvv" class="form-control" id="cvv">
              </div>
        
              <!-- Modal footer -->
              <div class="modal-footer">
                <button type="submit" class="btn btn-info">Submit</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
              </div>
             </div>
       </div>
  </div>
  </form>

</div>

      </div>
</div>





 
    
</body>
</html>