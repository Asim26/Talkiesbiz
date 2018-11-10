@include('home')
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	@can('isAdmin')
	<div class="container col-lg-8 jumbotron">
    
        <h4 style="text-align: center; color: blue ">Add Product</h4>
        <br>   
    <form action="{{url('/add_pro/save')}}" method="post" enctype="multipart/form-data"> 
    <fieldset>                 
     {{csrf_field()}}                

                        <div class="form-group row">
                            <label for="name" class="col-sm-4 col-form-label">{{ __('Product Title') }}</label>

                            <div class="col-md-8">
                                <input id="name" type="text" class="form-control" name="product_title">

                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="main_image" class="col-sm-4 col-form-label">{{ __('Main Image') }}</label>

                            <div class="col-md-8">
                                <div class="form-group">
                                      <input type="file"  name="main_image" >
                                </div>
                             </div>
                        </div>

                        <div class="form-group row">
                            <label for="other_images" class="col-sm-4 col-form-label">{{ __('Other Images') }}</label>

                            <div class="col-sm-2">
                                <input id="other_images" type="file" class="form-control" name="other_images">

                            </div>
                            <div class="col-sm-2">
                                <input id="other_images" type="file" class="form-control" name="other_image">

                            </div>
                            <div class="col-sm-2">
                                <input id="other_images" type="file" class="form-control" name="other_imag">

                            </div>
                        </div>
                        <br>


                        <div class="form-group row">
                            <label for="category" class="col-sm-4 col-form-label">{{ __('Category') }}</label>
                        
                        <div class="col-lg-4">
                        <label>Category</label>
                          <select name="main_category">
                          <option>Sample 1</option>
                          <option>Sample 2</option>
                          <option>Sample 3</option>
                          <option>Sample 4</option>
                          <option>Sample 5</option>
                        </select>
                      </div>
                     
                     <div class="col-lg-4">
                          <label>Sub Category</label>
                          <select name="sub_category">
                            <option>Sample 1</option>
                            <option>Sample 2</option>
                            <option>Sample 3</option>
                            <option>Sample 4</option>
                            <option>Sample 5</option>
                          </select>
                    </div>
                    </div>
                        
                        <div class="form-group row">
                            <label for="price" class="col-sm-4 col-form-label">{{ __('Price') }}</label>

                            <div class="col-md-4">
                                <input id="price" type="text" class="form-control" name="price">
                            </div>

                            <div class="col-md-4">
                                <input id="price" type="text" class="form-control" name="Price">

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="sku" class="col-sm-4 col-form-label">{{ __('SKU') }}</label>

                            <div class="col-md-8">
                                <input id="sku" type="text" class="form-control" name="sku">

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="quantity" class="col-sm-4 col-form-label">{{ __('Quantity') }}</label>

                            <div class="col-md-8">
                                <input id="quantity" type="text" class="form-control" name="quantity">

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="brand_name" class="col-sm-4 col-form-label">{{ __('Brand Name') }}</label>

                            <div class="col-md-8">
                                <input id="brand_name" type="text" class="form-control" name="brand_name">

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="package_contains" class="col-sm-4 col-form-label">{{ __('Package Contains') }}</label>

                            <div class="col-md-8">
                                <input id="package_contains" type="text" class="form-control" name="package_contains">

                            </div>
                        </div>
                   <div class="pull-right">
                        <button type="button" class="btn btn-primary btn-lg" href={{url('/')}} >Cancel</button>
                        <button type="submit" class="btn btn-primary btn-lg">Add Product</button>
                    </div>

    </fieldset>                
</form>
</div>
	@endcan




    @can('isSeller')
    <div class="container col-lg-8 jumbotron">
    
        <h4 style="text-align: center; color: blue ">Add Product</h4>
        <br>   
    <form action="{{url('/add_pro/save')}}" method="post" enctype="multipart/form-data"> 
    <fieldset>                 
     {{csrf_field()}}                

                        <div class="form-group row">
                            <label for="name" class="col-sm-4 col-form-label">{{ __('Product Title') }}</label>

                            <div class="col-md-8">
                                <input id="name" type="text" class="form-control" name="product_title">

                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="main_image" class="col-sm-4 col-form-label">{{ __('Main Image') }}</label>

                            <div class="col-md-8">
                                <div class="form-group">
                                      <input type="file"  name="main_image" >
                                </div>
                             </div>
                        </div>

                        <div class="form-group row">
                            <label for="other_images" class="col-sm-4 col-form-label">{{ __('Other Images') }}</label>

                            <div class="col-sm-2">
                                <input id="other_images" type="file" class="form-control" name="other_images">

                            </div>
                            <div class="col-sm-2">
                                <input id="other_images" type="file" class="form-control" name="other_image">

                            </div>
                            <div class="col-sm-2">
                                <input id="other_images" type="file" class="form-control" name="other_imag">

                            </div>
                        </div>
                        <br>


                        <div class="form-group row">
                            <label for="category" class="col-sm-4 col-form-label">{{ __('Category') }}</label>
                        
                        <div class="col-lg-4">
                        <label>Category</label>
                          <select name="main_category">
                          <option>Sample 1</option>
                          <option>Sample 2</option>
                          <option>Sample 3</option>
                          <option>Sample 4</option>
                          <option>Sample 5</option>
                        </select>
                      </div>
                     
                     <div class="col-lg-4">
                          <label>Sub Category</label>
                          <select name="sub_category">
                            <option>Sample 1</option>
                            <option>Sample 2</option>
                            <option>Sample 3</option>
                            <option>Sample 4</option>
                            <option>Sample 5</option>
                          </select>
                    </div>
                    </div>
                        
                        <div class="form-group row">
                            <label for="price" class="col-sm-4 col-form-label">{{ __('Price') }}</label>

                            <div class="col-md-4">
                                <input id="price" type="text" class="form-control" name="price">
                            </div>

                            <div class="col-md-4">
                                <input id="price" type="text" class="form-control" name="Price">

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="sku" class="col-sm-4 col-form-label">{{ __('SKU') }}</label>

                            <div class="col-md-8">
                                <input id="sku" type="text" class="form-control" name="sku">

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="quantity" class="col-sm-4 col-form-label">{{ __('Quantity') }}</label>

                            <div class="col-md-8">
                                <input id="quantity" type="text" class="form-control" name="quantity">

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="brand_name" class="col-sm-4 col-form-label">{{ __('Brand Name') }}</label>

                            <div class="col-md-8">
                                <input id="brand_name" type="text" class="form-control" name="brand_name">

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="package_contains" class="col-sm-4 col-form-label">{{ __('Package Contains') }}</label>

                            <div class="col-md-8">
                                <input id="package_contains" type="text" class="form-control" name="package_contains">

                            </div>
                        </div>
                   <div class="pull-right">
                        <button type="button" class="btn btn-primary btn-lg" href={{url('/')}} >Cancel</button>
                        <button type="submit" class="btn btn-primary btn-lg">Add Product</button>
                    </div>

    </fieldset>                
</form>
</div>
    @endcan






   @can('isReseller')
   <div class="container col-lg-8 jumbotron">
    
        <h4 style="text-align: center; color: blue ">Add Product</h4>
        <br>   
    <form action="{{url('/add_pro/save')}}" method="post" enctype="multipart/form-data"> 
    <fieldset>                 
     {{csrf_field()}}                

                        <div class="form-group row">
                            <label for="name" class="col-sm-4 col-form-label">{{ __('Product Title') }}</label>

                            <div class="col-md-8">
                                <input id="name" type="text" class="form-control" name="product_title">

                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="main_image" class="col-sm-4 col-form-label">{{ __('Main Image') }}</label>

                            <div class="col-md-8">
                                <div class="form-group">
                                      <input type="file"  name="main_image" >
                                </div>
                             </div>
                        </div>

                        <div class="form-group row">
                            <label for="other_images" class="col-sm-4 col-form-label">{{ __('Other Images') }}</label>

                            <div class="col-sm-2">
                                <input id="other_images" type="file" class="form-control" name="other_images">

                            </div>
                            <div class="col-sm-2">
                                <input id="other_images" type="file" class="form-control" name="other_image">

                            </div>
                            <div class="col-sm-2">
                                <input id="other_images" type="file" class="form-control" name="other_imag">

                            </div>
                        </div>
                        <br>


                        <div class="form-group row">
                            <label for="category" class="col-sm-4 col-form-label">{{ __('Category') }}</label>
                        
                        <div class="col-lg-4">
                        <label>Category</label>
                          <select name="main_category">
                          <option>Sample 1</option>
                          <option>Sample 2</option>
                          <option>Sample 3</option>
                          <option>Sample 4</option>
                          <option>Sample 5</option>
                        </select>
                      </div>
                     
                     <div class="col-lg-4">
                          <label>Sub Category</label>
                          <select name="sub_category">
                            <option>Sample 1</option>
                            <option>Sample 2</option>
                            <option>Sample 3</option>
                            <option>Sample 4</option>
                            <option>Sample 5</option>
                          </select>
                    </div>
                    </div>
                        
                        <div class="form-group row">
                            <label for="price" class="col-sm-4 col-form-label">{{ __('Price') }}</label>

                            <div class="col-md-4">
                                <input id="price" type="text" class="form-control" name="price">
                            </div>

                            <div class="col-md-4">
                                <input id="price" type="text" class="form-control" name="Price">

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="sku" class="col-sm-4 col-form-label">{{ __('SKU') }}</label>

                            <div class="col-md-8">
                                <input id="sku" type="text" class="form-control" name="sku">

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="quantity" class="col-sm-4 col-form-label">{{ __('Quantity') }}</label>

                            <div class="col-md-8">
                                <input id="quantity" type="text" class="form-control" name="quantity">

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="brand_name" class="col-sm-4 col-form-label">{{ __('Brand Name') }}</label>

                            <div class="col-md-8">
                                <input id="brand_name" type="text" class="form-control" name="brand_name">

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="package_contains" class="col-sm-4 col-form-label">{{ __('Package Contains') }}</label>

                            <div class="col-md-8">
                                <input id="package_contains" type="text" class="form-control" name="package_contains">

                            </div>
                        </div>
                   <div class="pull-right">
                        <button type="button" class="btn btn-primary btn-lg" href={{url('/')}} >Cancel</button>
                        <button type="submit" class="btn btn-primary btn-lg">Add Product</button>
                    </div>

    </fieldset>                
</form>
</div>
   @endcan


</body>
</html>