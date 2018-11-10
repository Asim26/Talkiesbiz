@include('home')
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	@can('isCustomer')
	<div class="container col-lg-7 jumbotron">
  <h2 style="text-align:center">Order History</h2>
  <p></p>
  <div class="links" style="text-align: right;"><a href="/payment_history">  Payment History  </a>  <a href="tracking">   Order Tracking</a></div>

  <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Product Name</th>
      <th scope="col">Quantity</th>
      <th scope="col">Price</th>
      <th scope="col">Status</th>
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
        <option>In procesing</option>
        <option>Delivered</option>
        <option>Completed Pending</option>
        <option>Canceled</option>
      </select>
    </div>
  </td>
    </tr>
    
    
  </tbody>
</table>

	@endcan

</body>
</html>