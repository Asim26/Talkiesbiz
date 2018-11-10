@include('home')
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div class="container">

  @can('isAdmin')
  <h3 style="text-align: center;" >Admin User</h3>
  <table class="table table-hover table-bordered">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Designation</th>
      <th scope="col">Level</th>      
      <th scope="col">Status</th>
      <th scope="col">Created On</th>
      <th scope="col">Assigned Rights</th>    
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Column content</td>
      <td>
        <div class="form-group">
      <label for="exampleSelect1"></label>
      <select class="form-control" id="exampleSelect1">
        <option>Admin</option>
        <option>Editor</option>
        <option>CSP</option>
      </select>
    </div>   
     </td>

      <td>
        <div class="form-group">
      <label for="exampleSelect1"></label>
      <select class="form-control" id="exampleSelect1">
        <option>Active</option>
        <option>Deactive</option>
      </select>
    </div>   
    </td>

      <td>Column content</td>

      <td><div class="form-group">
      <label for="exampleSelect1"></label>
      <select class="form-control" id="exampleSelect1">
        <option>Completed</option>
        <option>Dispatch</option>
        <option>Cancel</option>
      </select>
      </div>   
      <td>
      <a href="#">Edit</a>
      </td>
      </div>
    </td>
          
    </tr>      
  </tbody>
</table>


</div>
@endcan

</body>
</html>