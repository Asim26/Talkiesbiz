@include('home')
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	@can('isAdmin')
	<div class="container col-lg-8 jumbotron">
    <h3 style="text-align: center; color: blue" >Customer</h3>
	<table class="table table-hover table-bordered">
  <thead>
    <tr>
      <th scope="col">Name</th>
    <!--  <th scope="col">Orders</th> <!-->
      <th scope="col">company name</th>      
      <th scope="col">Area</th>      
      <th scope="col">Contact No</th>
      <th scope="col">Action</th>
      <th scope="col">Assign To</th>
      <th scope="col">Remark</th>
      
    </tr>
  </thead>
  <tbody>
  @foreach($customer_details as $detail)
    <tr>
      <td>{{$detail->first_name}}   {{$detail->last_name}}</td>
      <td>{{$detail->company_name}}</td>
      <td>{{$detail->street_address}}  {{$detail->town_city}}  {{$detail->state_country}}</td>
      <td>{{$detail->phone}}</td>
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
     
      

	      <td></td>


    </tr>  
    @endforeach    
  </tbody>
</table>


</div>

	@endcan

</body>
</html>