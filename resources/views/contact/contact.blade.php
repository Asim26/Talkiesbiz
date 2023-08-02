@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
  @can('isAdmin')
  <br>
	<div class="container col-lg-8 jumbotron">
    <h3 style="text-align: center; color: blue" >Contact</h3>
	<table class="table table-hover table-bordered">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Subject</th>
      <th scope="col">Message</th>      
      <th scope="col">Status</th>      
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Column content</td>
      <td>Column content</td>
      <td></td>
      <td></td>
    </tr>      
  </tbody>
</table>


</div>
@endcan


</body>
</html>
@endsection