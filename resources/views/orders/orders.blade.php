@include('home')

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
  @can('isAdmin')
  <br>
	<div class="container col-lg-8 jumbotron">
    <h3 style="text-align: center; color: blue" >Orders</h3>
	<table class="table table-hover table-bordered">
  <thead>
    <tr>
      <th scope="col">Product Name</th>
      <th scope="col">Qunatity</th>
      <th scope="col">Price</th>      
      <th scope="col">Store Type</th>
      <th scope="col">Status</th>
      <th scope="col">Assign To</th>
      <th scope="col">Tracking</th>
      
    </tr>
  </thead>
  <tbody>
    <tr>
      <th></th>
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
      <label for="exampleSelect1"></label>
      <select class="form-control" id="exampleSelect1">
        <option>Completed</option>
        <option>Dispatched</option>
        <option>Back Order</option>
        <option>In Process</option>
        <option>Cancelled</option>
        <option>Completed</option>
      </select>
    </div>     
</td>

      <td>
        <div class="form-group">
      <label for="exampleSelect1"></label>
      <select class="form-control" id="exampleSelect1">
        <option>User 1</option>
        <option>User 2</option>
      </select>
    </div>   
</td>
     
      

	      <td><a href="#">Go</a></td>


    </tr>      
  </tbody>
</table>


</div>
@endcan


@can('isSeller')
<br>
  <div class="container col-lg-8 jumbotron">
    <h3 style="text-align: center; color: blue" >Orders</h3>
  <table class="table table-hover table-bordered">
  <thead>
    <tr>
      <th scope="col">Sr. No</th>
      <th scope="col">Product Name</th>
      <th scope="col">Qunatity</th>
      <th scope="col">Orders</th>
      <th scope="col">Customer Name</th>
      <th scope="col">Address</th>
      <th scope="col">Action</th>
      <th scope="col">Tracking</th>
      
    </tr>
  </thead>
  <tbody>
    <tr>
      <th></th>
      <td>Column content</td>
      <td>Column content</td>
      <td>Column content</td>
      <td>Column content</td>
      <td>Column content</td>
     
      <td>
        <div class="form-group">
      <label for="exampleSelect1"></label>
      <select class="form-control" id="exampleSelect1">
        <option>Completed</option>
        <option>Dispatch</option>
        <option>Cancel</option>
      </select>
    </div>
</td>

        <td><a href="#">Go</a></td>


    </tr>      
  </tbody>
</table>


</div>
@endcan


@can('isReseller')
<br>
  <div class="container col-lg-8 jumbotron">
    <h3 style="text-align: center; color: blue" >Orders</h3>
  <table class="table table-hover table-bordered">
  <thead>
    <tr>
      <th scope="col">Sr. No</th>
      <th scope="col">Product Name</th>
      <th scope="col">Qunatity</th>      
      <th scope="col">Customer Name</th>
      <th scope="col">Address</th>
      <th scope="col">Action</th>
      <th scope="col">Tracking</th>
      
    </tr>
  </thead>
  <tbody>
    <tr>
      <th></th>
      <td>Column content</td>
      <td>Column content</td>
      <td>Column content</td>
      <td>Column content</td>
      <td><div class="form-group">
      <label for="exampleSelect1"></label>
      <select class="form-control" id="exampleSelect1">
        <option>Completed</option>
        <option>Dispatch</option>
        <option>Cancel</option>
      </select>
    </div></td>
     
      

        <td><a href="#">Go</a></td>


    </tr>      
  </tbody>
</table>


</div>

@endcan

</body>
</html>