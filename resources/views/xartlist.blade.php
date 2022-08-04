


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Theme The Band</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
  <a href="ordernow">Order Now</a>
  
  @foreach($arts as $product)
  <div class="container text-center">
    <h3>{{$product->name}}</h3>
    <p><em>  Price:{{$product->price}}em></p>
    <p>     Category:{{$product->category}}</p>
    <br>
    <div class="row">
      <div class="col-sm-4">
        <p><strong></strong></p><br>
        <img src="{{$product->gallery}}" alt="Random Name">
      </div>
      <div><a href="/removecart/{{$product->cart_id}}/"> Remove</a></div>
    </div>
  </div>
  @endforeach
     
       
            
             