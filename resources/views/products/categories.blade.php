@include('home')
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	@can('isAdmin')
	<div class="container col-lg-8 jumbotron">
 
  <div class="col-lg-7">
    <h4>Categories</h4>
    <br>                   

                        <div class="form-group row">
                            <label for="name" class="col-sm-4 col-form-label" >{{ __('Category name') }}</label>

                            <div class="col-md-8">
                                <input id="name" type="text" class="form-control" name="full_name" placeholder="www.talkiesbiz.com/">

                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="name" class="col-sm-4 col-form-label">{{ __('Parent Category') }}</label>

                            <div class="col-md-8">
                                <div class="form-group">
								      <label for="exampleSelect1"></label>
								      <select class="form-control" id="exampleSelect1">
								        <option>Sample 1</option>
								        <option>Sample 2</option>
								       </select>
								    </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-sm-4 col-form-label">{{ __('Commission') }}</label>

                            <div class="col-md-4">
                                <input id="name" type="text"  class="form-control" name="email" placeholder="%">%

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-sm-4 col-form-label">{{ __('Description') }}</label>

                            <div class="col-md-8">
                                <input id="name" type="text"  class="form-control" name="email">

                            </div>
                        </div>
       
       <fieldset>
  




                        
                   <div class="pull-left">
                        
                        <button type="button" class="btn btn-success btn-lg">Create</button>
                    </div>

  </div>
</div>

	@endcan

</body>
</html>