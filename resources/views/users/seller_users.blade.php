@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	@can('isAdmin')
	<div class="container col-lg-8 jumbotron">
    <h3 style="text-align: center;" > Seller Users </h3>
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
  @foreach($all_seller_users as $user)
    <tr>
      <td>{{$user->name}}</td>
      <td></td>
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
      <td>Active</td>
<td>
  </td>     
      
    </tr> 
    @endforeach     
  </tbody>
</table>


</div>

@endcan

</body>
</html>
@endsection