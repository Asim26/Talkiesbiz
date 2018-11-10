@include('home')
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	@can('isCustomer')
  <div class="container col-lg-4 jumbotron">
  <h2 style="text-align: center; color: blue">Tracking</h2>
  <p></p>
  <br>
  <form>
    <div class="form-group">
      <label for="usr">Tracking</label>
      <input type="text" class="form-control" id="usr">
    </div>

    <button type="button" class="btn btn-primary btn-lg" style=" float:right;">Go</button>
    
    <button type="button" class="btn btn-primary btn-lg" style=" float:right;">Cancel </button>
  </form>
</div>
	@endcan

</body>
</html>