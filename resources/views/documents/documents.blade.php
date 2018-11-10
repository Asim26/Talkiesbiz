@include('home')
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	@can('isAdmin')
	<div class="container col-lg-8 jumbotron">
    <h3 style="text-align: center; color:blue" >Documents</h3>
	<table class="table table-hover table-bordered">
  <thead>
    <tr>
      <th scope="col">Seller /Reseller</th>
      <th scope="col">Doc Name</th>
      <th scope="col">Document</th>      
      <th scope="col">Status</th>
      <th scope="col">Assign To</th>
      <th scope="col">Remark</th>  
    </tr>
  </thead>
  <tbody>
    <tr>
      <th></th>
      <td>Column content</td>
      <td>Column content</td>
      <td><div class="form-group">
      <label for="exampleSelect1"></label>
      <select class="form-control" id="exampleSelect1">
        <option>Pending</option>
        <option>Accepted</option>
        <option>Rejected</option>
        <option>Reconsider</option>
      </select>
    </div>   
   </td>

      <td><div class="form-group">
      <label for="exampleSelect1"></label>
      <select class="form-control" id="exampleSelect1">
        <option>User 1</option>
        <option>User 2</option>
      </select>
    </div>   </td>

      <td></td>
     
      

	      

    </tr>      
  </tbody>
</table>


</div>
	@endcan

</body>
</html>