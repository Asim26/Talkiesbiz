@include('home')
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	@can('isAdmin')
	<div class="container">
	<h1>Page Under Construction</h1>
    </div>
	@endcan

</body>
</html>