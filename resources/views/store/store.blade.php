<!DOCTYPE html>
<html>
<head>
    <title>store</title> 
    <link rel="stylesheet" type="text/css" href="{{url('bootstrap/bootstrap.css')}}">
     <link rel="stylesheet" type="text/css" href="{{url('bootstrap/bootstrap.css.min')}}">
</head>
<body>

<div class="container jumbotron">
			<h2 style="text-align: center;">Store Name</h2>
			<div class="col-lg-4 jumbotron" style="float: left;">
				
				<div class="col-lg-4">
					<h2>Store Logo</h2>
					<img src="{{url('/')}}" class="img-thumbnail" alt="Cinque Terre">
				</div>

				<h2>Price</h2>
				  <div class="form-group">
			      <label for="exampleSelect1"></label>
			      <select class="form-control" id="exampleSelect1">
			        <option>1000-10,000</option>
			        <option>10,000-20,000</option>
			        <option>20,000-30,000</option>
			        <option>30,000-40,000</option>
			        <option>40,000-50,000</option>
			      </select>
			    </div>
		
				

			</div>

					<div class="col-lg-8 jumbotron" style="float: right;">
						<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
						<a class="navbar-brand" href="talkies"></a>
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>

					  <div class="collapse navbar-collapse" id="navbarColor01">
					    <ul class="navbar-nav mr-auto">
					      		    
					      <li class="nav-item">
					        <a class="nav-link" href="#">Perfumes</a>
					      </li>
					      <li class="nav-item">
					        <a class="nav-link" href="#">Gadgets</a>
					      </li>
					      <li class="nav-item">
					        <a class="nav-link" href="#">Jewelry</a>
					      </li>
					      <li class="nav-item">
					        <a class="nav-link" href="#">kids</a>
					      </li>
					      <li class="nav-item">
					        <a class="nav-link" href="#">Footwear</a>
					      </li>
					      
					    </ul>
					    
					   
					  </div>
					</nav>






			<table class="table jumbotron">
				  <thead>
					    <tr>
					      <td><img src="{{url('/')}}" class="img-thumbnail" alt="Cinque Terre"></td>
					      <td><img src="{{url('/')}}" class="img-thumbnail" alt="Cinque Terre"></td>
					    </tr>
				  </thead>

				  <tbody>
					@foreach($products as $product)
					    <tr>

					      <td>
								<a href="{{url('/store/item_detail/'.$product->id)}}"><img src="{{url('/image/'.$product->main_image)}}" class="img-responsive" height="180px" width="150px" >
					      	</a>
					      	
					      </td>
                           
                           <td>
                           	Product: {{$product->product_title}}<br> Price:{{$product->price}} <br>
                           	<a href="{{ url('/') }}" class="btn btn-info">Add to wishlist</a>
                           	<a href="{{ url('/') }}" class="btn btn-success">Add to cart</a>
                           </td>


					   </tr>
						 @endforeach
                      
				  </tbody>
			</table> 
			</div>


		</div>
    
</body>
</html>