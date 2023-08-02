@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html>
<head>
	<title></title>
   <!-- Font Awesome Icon Library rating stars -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
  checked {
    color: orange;
}
</style>
</head>
<body>
	@can('isCustomer')
	<div class="container col-lg-7 jumbotron">
  <h2 style="text-align: center; color: blue">Rating</h2>
  <p></p>
  <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Product Name</th>
      <th scope="col">Store URL</th>
      <th scope="col">Rating</th>
      <th scope="col">Comments</th>
    </tr>
  </thead>
  <tbody>
    <tr class="table-active">
    	<td></td>
      <td></td>
      <td>
        <span class="fa fa-star checked"></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>
        </td>
      <td></td>
    </tr>
    
    
  </tbody>
</table>
	@endcan

</body>
</html>
@endsection