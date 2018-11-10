@include('home')
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	@can('isAdmin')
	<div class="container jumbotron">
    <h4 style="text-align: center;">List Of Products</h4>
	<table class="table table-hover table-bordered">
  <thead>
    <tr>
      <th scope="col">Product Name</th>
      <th scope="col">Category</th>
      <th scope="col">Seller Name</th>
      <th scope="col">Quantity</th>
      <th scope="col">Status</th>
      
    </tr>
  </thead>
  <tbody>
  @foreach($listofproducts as $product)
    <tr>
      <td>{{$product->product_title}}</td>
      <td>Main Category:{{$product->main_category}}
      <br>
      <br>
      Sub Category
      {{$product->sub_category}}</td>
      <td> {{ Auth::user()->name }} </td>
      <td>{{$product->quantity}}</td>
      
      <td>
      	<div class="form-group">
      <label for="exampleSelect1">Visiblity</label>
      <select class="form-control" id="exampleSelect1">
        <option>Block</option>
        <option>Active</option>
      </select>
    </div>   
</td>
     
      
    </tr>
    @endforeach      
  </tbody>
</table>
</div>

	@endcan

</body>
</html>