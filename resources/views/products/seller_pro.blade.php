@include('home')
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	@can('isAdmin')
	<div class="container jumbotron">
    <h4 style="text-align: center;">Seller Products</h4>
	<table class="table table-hover table-bordered">
  <thead>
    <tr>
      <th scope="col">Product Name</th>
      <th scope="col">Category</th>
      <th scope="col">Price</th>
      <th scope="col">Quantity</th>
      <th scope="col">Seller Name</th>
      <th scope="col">Status</th>      
    </tr>
  </thead>
  <tbody>
  @foreach($seller_products as $product)
    <tr>
      <td>{{$product->product_title}}</td>
      <td>Main category: {{$product->main_category}}<br>Sub category: {{$product->sub_category}}</td>
      <td>{{$product->price}}</td>
      <td>{{$product->quantity}}</td>      
      <td>{{ Auth::user()->name }}</td>
     
     <td>
        <div class="form-group">
        <select name="user_type">
              <option>Accepted</option>          
              <option>Rejected</option>
              <option>Pending</option>
              <option>Customer</option>            
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