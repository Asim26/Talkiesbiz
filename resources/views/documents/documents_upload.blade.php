<!DOCTYPE html>
<html>
<head>
    
    <title>Page Title</title>
    <link rel="stylesheet" type="text/css" href="{{url('bootstrap/bootstrap.css')}}">
     <link rel="stylesheet" type="text/css" href="{{url('bootstrap/bootstrap.css.min')}}">
</head>
<body>
<br>
<div class="container col-lg-8 jumbotron">
    <div class="col-lg-12">
    <div class="col-lg-5"></div>
            <div class="col-lg-7">
                    <h4></h4>
                    <br>     
                    <form action="{{url('/')}}" method="post" enctype="multipart/form-data"> 
                    <fieldset>                 
                            {{csrf_field()}}              
                
                                <div class="form-group row">
                                    <label for="name" class="col-sm-4 col-form-label" >{{ __('Emirates ID') }}</label>
                                        <div class="col-md-8">
                                            <input id="name" type="file" name="store_url" value="www.talkiesbiz.com/">
                                    </div>
                                </div>
                                        
                                <div class="form-group row">
                                    <label for="name" class="col-sm-4 col-form-label">{{ __('Passport Copy') }}</label>
                                        <div class="col-md-8">
                                            <input id="name" type="file" name="store_logo">
                                        </div>
                                </div>

                                        
                                <div class="pull-right">
                                    <button type="submit" class="btn btn-success btn-lg">Submit for review</button>
                                </div>
                  </fieldset> 
                  </form>                                                        
             </div>
    </div>

</div>
    
</body>
</html>