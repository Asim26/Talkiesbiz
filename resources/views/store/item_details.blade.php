<!DOCTYPE html>
<html>
<head>
    <title>Item Details</title>   
    <link rel="stylesheet" type="text/css" href="{{url('bootstrap/bootstrap.css')}}">
     <link rel="stylesheet" type="text/css" href="{{url('bootstrap/bootstrap.css.min')}}"> 

       <!-- Font Awesome Icon Library rating stars -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     
     <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
     <style>
  .checked {
    color: orange;
}



fa {
  padding: 20px;
  font-size: 30px;
  width: 50px;
  text-align: center;
  text-decoration: none;
  margin: 5px 2px;
}

.fa:hover {
    opacity: 0.7;
}

.fa-facebook {
  background: #3B5998;
  color: white;
}

</style>

</head>
<body>
<br>
<div class="container col-lg-8 jumbotron " >
			<h2 style="text-align: center;">Store Name</h2>
      <br>
      <br>


    <div class="col-lg-4 " style="float: right;">
      <h6>Image</h6>
      <img src="{{url('/image/'.$product->main_image)}}" class="img-responsive" height="300px" width="250px" >
    </div>

			 
			<div class="col-lg-4 " style="float: center;">
      <h4>Product:{{$product->product_title}} </h4>
      
      <br>
      <h4>Color:Red</h4>
      <br>
			

      <h4>Size:Large</h4>
      <br>

      <h4>Price: {{$product->price}}</h4>
      <br>
      <br>
  			<h5>Rating:
         <span class="fa fa-star checked"></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>
        </h5>

			<br>
    		<h5>Share On:
            <a href="#" class="fa fa-facebook"></a>
            <a href="#" class="fa fa-twitter"></a>
            <a href="#" class="fa fa-google"></a>
            <a href="#" class="fa fa-linkedin"></a>
         </h5>

				    

			</div>

       <div style="float: right;">
          <a href="{{ url('/') }}" class="btn btn-primary btn-lg">Add to wishlist</a>
          <a href="{{ url('store/item_detail/'.$product->id.'/add_to_cart') }}" class="btn btn-success btn-lg">Add to cart</a>
	    </div>		



			</div>
 



</div>
    
</body>
</html>