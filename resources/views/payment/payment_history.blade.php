@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	@can('isCustomer')
	<div class="container col-lg-7 jumbotron">
  <h2 style="text-align: center;">Payment History</h2>
  <p></p>

  <div class="links" style="text-align: right;"><a href="history">  Order History  </a>  <a href="tracking">   Order Tracking</a></div>

  <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Product Name</th>
      <th scope="col">Quantity</th>
      <th scope="col">Price</th>
      <th scope="col">Method</th>
    </tr>
  </thead>
  <tbody>
    <tr class="table-active">
      <th scope="row">Active</th>
      <td>Column content</td>
      <td>Column content</td>
      <td>
        <div class="form-group">
      <label for="exampleSelect1"></label>
      <select class="form-control" id="exampleSelect1">
        <option>Credit</option>
        <option>Debit</option>
      </select>
    </div>
  </td>
    </tr>
    
    
  </tbody>
</table>
	@endcan

</body>
</html>
@endsection