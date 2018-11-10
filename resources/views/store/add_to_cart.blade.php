<!DOCTYPE html>
<html>
<head>
    <title>add to cart</title>  
    <link rel="stylesheet" type="text/css" href="{{url('bootstrap/bootstrap.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('bootstrap/bootstrap.css.min')}}">
</head>
<body>
<br>
<div class="container col-lg-8 jumbotron">
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
      <td><input type="text"name="quantity" value="{{$product->quantity}}"</td>
      <td>{{$product->price}}</td>
      
    </tr>      
  </tbody>
</table>

<div class="jumbotron" style="float: right;">
  <h4>Total Price:{{$product->price}}</h4>
  <h4>VAT:</h4>
  <h4>Courier Charges:</h4>
    <h4>Grand Total:</h4>
<a href="{{ url('/login') }}" class="btn btn-primary btn-lg">Confirm Order</a>

</div>
</div>

</div>
    
</body>
</html>