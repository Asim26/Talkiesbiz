@include('home')
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	@can('isAdmin')
	<div class="container col-lg-8 jumbotron">
    <h3 style="text-align: center;" > Reseller Users </h3>
	<table class="table table-hover table-bordered">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Store Name</th>
      <th scope="col">Products</th>      
      <th scope="col">Orders</th>
      <th scope="col">Status</th>
      <th scope="col">Action</th>     
    </tr>
  </thead>
  <tbody>
    <tr>
      <th></th>
      <td>Column content</td>
      <td>Column content</td>
      <td></td>
      <td>
        <div class="form-group">
      <label for="exampleSelect1"></label>
      <select class="form-control" id="exampleSelect1">
        <option>Active</option>
        <option>Deactive</option>
      </select>
    </div>   
</td>
      <td>
        <div class="form-group">
      <label for="exampleSelect1"></label>
      <select class="form-control" id="exampleSelect1">
        <option>Block</option>
        <option>Active</option>
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