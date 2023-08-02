@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	@can('isCustomer')
	<div class="container col-lg-4 jumbotron">
  <h2 style="text-align: center; color: blue">Change Password</h2>
  <p></p>
  <br>
  <form>
    <div class="form-group">
      <label for="usr">Current Password:</label>
      <input type="text" name="current_password" value="" class="form-control" id="usr">
    </div>
    <div class="form-group">
      <label for="pwd">New Password:</label>
      <input type="password" class="form-control" id="pwd">
    </div>
    <div class="form-group">
      <label for="pwd2">Confirm Password</label>
      <input type="password" class="form-control" id="pwd2">
    </div>
    <button type="button" class="btn btn-primary btn-lg">Save</button>
  </form>
</div>
	@endcan

</body>
</html>
@endsection