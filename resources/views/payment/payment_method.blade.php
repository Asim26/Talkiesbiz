@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	
	@can('isCustomer')
	<div class="container col-lg-7 jumbotron">
  <h2 style="text-align: center;">Payment Via Credit card / Debit Card</h2>
  <p></p>
  <form action="{{url('/payment_method/save/.$product->id')}}" method="post" enctype="multipart/form-data"> 
    <fieldset>                 
     {{csrf_field()}}
  
      <div class="form-group">
      <label for="credit_card_no">Credit Card Number</label>
      <input type="text" name="credit_card_no" class="form-control" id="credit_card_no" value=".$product->id ">
    </div>
    <div class="form-group">
      <label for="card_type">Card Type</label>
            <select name="card_type">
              <option>Sample 1</option>
              <option>Sample 2</option>
              <option>Sample 3</option>
              <option>Sample 4</option>
              <option>Sample 5</option>
            </select>
      
    </div>


      <div class="form-group">
      <label for="expiry">Expiry</label>      
      <input type="text" name="expiry" class="form-control col-lg-3" id="expiry">
      <br>
    </div>

    <div class="form-group">
      <label for="cvv">CVV</label>
      <input type="text" name="cvv" class="form-control" id="cvv">
    </div>

    <button type="submit" class="btn btn-primary btn-lg">Make Payment</button>
    </fieldset>
  </form>
</div>
    
    
  </tbody>
</table>

	@endcan

</body>
</html>
@endsection