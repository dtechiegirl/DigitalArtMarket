

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Order Now</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Order Now Table</h2>
  <p>Here is the summary of your order </p>            
  <table class="table table-condensed">
    <thead>
      <tr>
        <th>Amount</th>
        <th>${{$total}}</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Tax</td>
        <td>$ 50</td>
        
      </tr>
      <tr>
        <td>Total Delivery</td>
        <td>${{$total + 50}}</td>
      </tr>
     
    </tbody>
  </table>
</div>

<form class="form-horizontal" action="orderplace" method="post" >
  @csrf
    <div class="form-group">
     
      <div class="col-sm-offset-2 col-sm-5">
        <textarea type="email" name="address" class="form-control" id="email" placeholder="Enter email"></textarea>
      </div>
    </div>
   

    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <div class="checkbox">
          <label>Payment Method <br><br>
            <input type="radio" value="Transfer" name="payment">Online Payment <br><br>
         <input type="radio" value="Delivery" name="payment">Payment on Delivery</label>
        </div>
      </div>

    </div>
    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-success">Order Now</button>
      </div>
    </div>
</form>
