@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	@can('isSeller')
	<div class="container col-lg-10 jumbotron"> 
      <h4 style="text-align: center; color: blue">Add Bulk Product</h4>

<form action="{{url('/add_bulk/save')}}" method="post" enctype="multipart/form-data"> 
    <fieldset>                 
{{csrf_field()}} 
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Product Name</th>
      <th scope="col">Description</th>
      <th scope="col">Main Image</th>
      <th scope="col">Other Images</th>
      <th scope="col">Category</th>
      <th scope="col">Price</th>
      <th scope="col">Quantity</th>
      <th scope="col">Brand Name</th>
      <th scope="col">Package Contains</th>
    </tr>
  </thead>
  <tbody>
    <tr class="table">
      <th scope="row">
        <div>
            <input id="name" type="text" class="form-control" name="product_title">
        </div>
      </th>
      <td>
        <div>
            <input id="name" type="text" class="form-control" name="description">
        </div>
      </td>
      <td>
        <div>
            <input id="name" type="file" class="form-control" name="main_image">
        </div>
      </td>
      <td>
        <div>
            <input id="name" type="file" class="form-control" name="other_images">
            <input id="name" type="file" class="form-control" name="othe">
            <input id="name" type="file" class="form-control" name="Other">
        </div>
      </td>

      <td>
        <select name="main_category">
          <option>Sample 1</option>
          <option>Sample 2</option>
          </select>
      </td>

      <td>
        <div>
           <input id="name" type="text" class="form-control" name="price">
        </div>
      </td>

      <td>
        <div>
           <input id="name" type="text" class="form-control" name="quantity">
        </div>
      </td>

      <td>
        <div>
          <input id="name" type="text" class="form-control" name="brand_name">
        </div>
      </td>

      <td>
        <div>
          <input id="name" type="text" class="form-control" name="package_contains">
        </div>
      </td>
    </tr>
    
  </tbody>
</table>
                    <div class="pull-right">
                        <button type="button" class="btn btn-primary btn-lg" href={{url('/')}}>Cancel</button>
                        <button type="submit" class="btn btn-primary btn-lg">Add Product</button>
                    </div>
</div>



</fieldset>                
</form>
	@endcan


@can('isReseller')
<div class="container col-lg-10 jumbotron"> 
      <h4 style="text-align: center; color: blue">Add Bulk Product</h4>

<form action="{{url('/add_bulk/save')}}" method="post" enctype="multipart/form-data"> 
    <fieldset>                 
{{csrf_field()}} 
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Product Name</th>
      <th scope="col">Description</th>
      <th scope="col">Main Image</th>
      <th scope="col">Other Images</th>
      <th scope="col">Category</th>
      <th scope="col">Price</th>
      <th scope="col">Quantity</th>
      <th scope="col">Brand Name</th>
      <th scope="col">Package Contains</th>
    </tr>
  </thead>
  <tbody>
    <tr class="table">
      <th scope="row">
        <div>
            <input id="name" type="text" class="form-control" name="product_title">
        </div>
      </th>
      <td>
        <div>
            <input id="name" type="text" class="form-control" name="description">
        </div>
      </td>
      <td>
        <div>
            <input id="name" type="file" class="form-control" name="main_image">
        </div>
      </td>
      <td>
        <div>
            <input id="name" type="file" class="form-control" name="other_images">
            <input id="name" type="file" class="form-control" name="othe">
            <input id="name" type="file" class="form-control" name="Other">
        </div>
      </td>

      <td>
        <select name="main_category">
          <option>Sample 1</option>
          <option>Sample 2</option>
          </select>
      </td>

      <td>
        <div>
           <input id="name" type="text" class="form-control" name="price">
        </div>
      </td>

      <td>
        <div>
           <input id="name" type="text" class="form-control" name="quantity">
        </div>
      </td>

      <td>
        <div>
          <input id="name" type="text" class="form-control" name="brand_name">
        </div>
      </td>

      <td>
        <div>
          <input id="name" type="text" class="form-control" name="package_contains">
        </div>
      </td>
    </tr>
    
  </tbody>
</table>
                    <div class="pull-right">
                        <button type="button" class="btn btn-primary btn-lg" href={{url('/')}}>Cancel</button>
                        <button type="submit" class="btn btn-primary btn-lg">Add Product</button>
                    </div>
</div>



</fieldset>                
</form>
@endcan

</body>
</html>
@endsection