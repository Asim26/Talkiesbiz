<!DOCTYPE html>
<html>
<head>
    <title>Congratulations</title>
    <link rel="stylesheet" type="text/css" href="{{url('bootstrap/bootstrap.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('bootstrap/bootstrap.css.min')}}">
</head>
<body>
<br>
<div class="container col-lg-8 jumbotron">
    <h3 style="text-align: center; color: blue" >Congratulations</h3>
    <p>Your order is Received</p>
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
      <td></td>
      <td></td>
      <td></td>
      
    </tr>      
  </tbody>
</table>

<div class="jumbotron" style="float: right;">
  <h4>Total Price: </h4>
  <h4>VAT:</h4>
  <h4>Courier Charges:</h4>
    <h4>Grand Total:</h4>
<a href="{{ url('/') }}" class="btn btn-primary btn-lg">Close</a>

</div>
</div>

</div>
    
</body>
</html>