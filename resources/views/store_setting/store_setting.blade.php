@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	@can('isSeller')
	<br>
<div class="container col-lg-8 jumbotron">
    <div class="col-lg-12">
    <div class="col-lg-5"></div>
            <div class="col-lg-7">
                    <h4>Store Settings</h4>
                    <br>     
                    <form action="{{url('/store_setting/save')}}" method="post" enctype="multipart/form-data"> 
                    <fieldset>                 
                            {{csrf_field()}}              
                
                                <div class="form-group row">
                                    <label for="name" class="col-sm-4 col-form-label" >{{ __('Store URL') }}</label>
                                        <div class="col-md-8">
                                            <input id="name" type="text" class="form-control" name="store_url" value="www.talkiesbiz.com/">
                                    </div>
                                </div>
                                        
                                <div class="form-group row">
                                    <label for="name" class="col-sm-4 col-form-label">{{ __('Store Logo') }}</label>
                                        <div class="col-md-8">
                                            <input id="name" type="file" name="store_logo">
                                        </div>
                                </div>

                                        
                                <div class="pull-right">
                                    <a href="{{ url('/') }}" class="btn btn-primary btn-lg">Reset</a>                                       
                                    <button type="submit" class="btn btn-success btn-lg">Save</button>
                                </div>
                  </fieldset> 
                  </form>                                                        
             </div>
    </div>

</div>
	@endcan



	@can('isReseller')
  <br>
  <div class="container col-lg-8 jumbotron">
  <div class="col-lg-12">
  <div class="col-lg-5"></div>
  <div class="col-lg-7">
    <h4>Store Settings</h4>
    <br>     
    <form action="{{url('/store_setting/save')}}" method="post" enctype="multipart/form-data"> 
    <fieldset>                 
{{csrf_field()}}              

                        <div class="form-group row">
                            <label for="name" class="col-sm-4 col-form-label" >{{ __('Store URL') }}</label>

                            <div class="col-md-8">
                                <input id="name" type="text" class="form-control" name="store_url" value="www.talkiesbiz.com/">

                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="name" class="col-sm-4 col-form-label">{{ __('Store Logo') }}</label>

                            <div class="col-md-8">
                                <input id="name" type="file" name="store_logo">

                            </div>
                        </div>

                        
                   <div class="pull-right">
                         <a href="{{ url('/') }}" class="btn btn-primary btn-lg">Reset</a>
                        
                        <button type="submit" class="btn btn-success btn-lg">Save</button>
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