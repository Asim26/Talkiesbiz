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

  <h3 style="text-align: center;" >Admin User</h3>
  <table class="table table-hover table-bordered">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Designation</th>
      <th scope="col">Level</th>      
      <th scope="col">Status</th>
      <th scope="col">Created On</th>
      <th scope="col">Assigned Rights</th>    
    </tr>
  </thead>
  <tbody>

  @foreach($all_admin_users as $user)
    <tr>
   
      <td>{{$user->name}}</td>
      <td>{{$user->user_type}}</td>

      <td>Active</td>

      <td>Active</td>

      <td>{{$user->created_at}}<td>
      <a href="#">Edit</a>
      </td>
      </div>
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