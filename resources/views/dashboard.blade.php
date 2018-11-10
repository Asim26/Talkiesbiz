@include('home')
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
			<td><h4>Site Views</h4></td>
			<td>  4586</td>
			
		
			<td><h4>No of Orders</h4></td>
			<td>6564</td>

		</tr>

		<tr class="col-lg-6">
			<td><h4>No of Sellers</h4></td>
			<td> 6644</td>
			
		
			<td><h4>No of Resellers</h4></td>
			<td>65464</td>

		</tr>
	</table>
</div>
@endcan

</body>
</html>