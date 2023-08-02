@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="{{url('bootstrap/bootstrap.css')}}">
     <link rel="stylesheet" type="text/css" href="{{url('bootstrap/bootstrap.css.min')}}">
</head>
<body>
	<br>

@can('isAdmin')
<div class="container col-lg-8 jumbotron">
	<table class="table table-bordered col-lg-12 ">
		<tr class="col-lg-6">
			<td><h4><b>Site Views</b></h4></td>
			<td><h4><b> </b></h4></td>
			
		
			<td><h4><b>No of Orders</b></h4></td>
			<td><h4><b>{{$no_of_orders}}</b></h4></td>

		</tr>

		<tr class="col-lg-6">
			<td><h4><b>No of Sellers<b></h4></td>
			<td><h4><b>{{$no_of_sellers}} </b></h4></td>
			
		
			<td><h4><b>No of Resellers<b></h4></td>
			<td><h4><b>{{$no_of_resellers}}</b></h4></td>

		</tr>
	</table>
</div>
@endcan

</body>
</html>
@endsection