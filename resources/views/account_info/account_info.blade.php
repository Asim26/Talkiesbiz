@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	@can('isSeller')
	<div class="container col-lg-8 jumbotron">
  <div class="col-lg-12">
  <div class="col-lg-5"></div>
  <div class="col-lg-7">
    <h4>Account Info</h4>
    <br>             
    <form action="{{url('/account_info/save')}}" method="post"> 
    <fieldset>                 
{{csrf_field()}}      

      <div class="form-group row">
        <label for="name" class="col-sm-4 col-form-label" >{{ __('Full name') }}</label>

          <div class="col-md-8">
            <input id="name" type="text" class="form-control" name="full_name" placeholder="www.talkiesbiz.com/">

            </div>
       </div>
                        
                        <div class="form-group row">
                            <label for="name" class="col-sm-4 col-form-label">{{ __('Email') }}</label>

                            <div class="col-md-8">
                                <input id="name" type="email"  class="form-control" name="email">

                            </div>
                        </div>
       
  <div class="form-group">
      <legend>Gender</legend>

    <input type="radio" name="gender" value="male"> Male<br>
    <input type="radio" name="gender" value="female">Female<br>
  </div>


<label>Nature Of Indiviual: </label>
<select name="customer_type">
  <option>Importer</option>
  <option>Expoter</option>
  <option>Wholeseller</option>
  <option>Retailer</option>
  <option>Indiviual</option>
</select>
<br>
<br>

                        
    <div class="pull-right">
       <a href="{{ url('/') }}" class="btn btn-danger btn-lg">Reset</a>
       <button type="submit" class="btn btn-primary btn-lg">Save</button>
    </div>

  </div>
</div>

</fieldset>                
</form>

</div>

	@endcan





	@can('isReseller')
  <div class="container col-lg-8 jumbotron">
  <div class="col-lg-12">
  <div class="col-lg-5"></div>
  <div class="col-lg-7">
    <h4>Account Info</h4>
    <br>             
    <form action="{{url('/account_info/save')}}" method="post"> 
    <fieldset>                 
{{csrf_field()}}      

      <div class="form-group row">
        <label for="name" class="col-sm-4 col-form-label" >{{ __('Full name') }}</label>

          <div class="col-md-8">
            <input id="name" type="text" class="form-control" name="full_name" placeholder="www.talkiesbiz.com/">

            </div>
       </div>
                        
                        <div class="form-group row">
                            <label for="name" class="col-sm-4 col-form-label">{{ __('Email') }}</label>

                            <div class="col-md-8">
                                <input id="name" type="email"  class="form-control" name="email">

                            </div>
                        </div>
       
  <div class="form-group">
      <legend>Gender</legend>

    <input type="radio" name="gender" value="male"> Male<br>
    <input type="radio" name="gender" value="female">Female<br>
  </div>


<label>Nature of Indiviual: </label>
<select name="customer_type">
  <option>Importer</option>
  <option>Expoter</option>
  <option>Wholeseller</option>
  <option>Retailer</option>
  <option>Indiviual</option>
</select>
<br>
<br>

                        
    <div class="pull-right">
       <a href="{{ url('/') }}" class="btn btn-danger btn-lg">Reset</a>
       <button type="submit" class="btn btn-primary btn-lg">Save</button>
    </div>

  </div>
</div>

</fieldset>                
</form>

</div>
	
	@endcan

</body>
</html>
@endsection