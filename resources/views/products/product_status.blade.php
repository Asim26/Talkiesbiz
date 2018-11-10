@include('home')
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	@can('isSeller')
  <div class="container col-lg-8 jumbotron">
    <h4 style="text-align: center;">Products</h4>
	<table class="table table-hover table-bordered">
  <thead>
    <tr>
      <th scope="col">Sr. No</th>
      <th scope="col">Product Title</th>
      <th scope="col">Views</th>
      <th scope="col">Orders</th>
      <th scope="col">P. Type</th>
      <th scope="col">Visible</th>
      <th scope="col">Action</th>
      
    </tr>
  </thead>
  <tbody>
    <tr>
      <th></th>
      <td>Column content</td>
      <td>Column content</td>
      <td>Column content</td>
      <td>                                        
      <div class="form-group">
      <label for="exampleSelect1"></label>
      <select class="form-control" id="exampleSelect1">
        <option>Seller</option>
        <option>Reseller</option>
      </select>
    </div>
</td>
      
      <td>
      	<div class="form-group">
      <label for="exampleSelect1">Visibility</label>
      <select class="form-control" id="exampleSelect1">
        <option>Yes</option>
        <option>No</option>
      </select>
    </div>
</td>
     
      <td>
      	<div class="form-group">
      <label for="exampleSelect1">Action</label>
      <select class="form-control" id="exampleSelect1">
        <option>view</option>
        <option>Edit</option>
      </select>
    </div>
</td>
    </tr>      
  </tbody>
</table>
</div>
	@endcan

	@can('isReseller')
	<div class="container col-lg-8 jumbotron">
    <h4 style="text-align: center; color: blue">Products</h4>
	<table class="table table-hover table-bordered">
  <thead>
    <tr>
      <th scope="col">Sr. No</th>
      <th scope="col">Product Title</th>
      <th scope="col">Views</th>
      <th scope="col">Orders</th>
      <th scope="col">Action</th>
      
    </tr>
  </thead>
  <tbody>
    <tr>
      <th></th>
      <td>Column content</td>
      <td>Column content</td>
      <td>Column content</td>
      <td>                                        
      <div class="form-group">
      <label for="exampleSelect1"></label>
      <select class="form-control" id="exampleSelect1">
        <option>Remove</option>
        <option>View Details</option>
      </select>
    </div>
</td> 
    </tr>      
  </tbody>
</table>
</div>
	@endcan

</body>
</html>