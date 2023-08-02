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
  <h2 style="text-align: center;">Profile</h2>
  <p></p>
  <form action="{{url('/profile/save')}}" method="post">
    <fieldset>                 
{{csrf_field()}}

    <div class="form-group">
      <label for="name">Name:</label>
      <input type="text" class="form-control" id="name" name="name">
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" name="email">
    </div>
    <div class="form-group">
      <label for="contact">Contact</label>
      <input type="text" class="form-control" id="contact" name="contact">
    </div>
    <div class="form-group">
      <label for="address">Address</label>
      <input type="text" class="form-control" id="address" name="address">
    </div>
    <div class="form-group">
      <label for="city">City</label>
      <input type="text" class="form-control" id="city" name="city">
    </div>
    <div class="form-group">
      <label for="country">Country</label>
      <input type="text" class="form-control" id="country" name="country">
    </div>
    <div class="form-group">
      <label for="emirate_id">Emirate ID</label>
      <input type="text" class="form-control" id="emirate_id" name="emirate_id">
    </div>
    <button type="submit" class="btn btn-primary btn-lg">Save</button>

  </fieldset>
  </form>
</div>
	@endcan

</body>
</html>
@endsection