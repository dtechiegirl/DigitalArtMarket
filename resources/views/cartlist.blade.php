<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>Bootstrap Theme Simply Me</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
 
  <div class="container mt-200 "> 
  <h1>YOUR CART LIST</h1>
  </div>
  <a href="ordernow" >Order Now</a>
  @foreach($arts as $product)
    
<div class="container mt-200 ">    

    
  <div class="row mb-200">
    <div class="col-sm-4 ">
        
    <br><br>
      <img src="{{$product->gallery ? asset('storage/' . $product->gallery): asset('images/img1.jpg') }}"alt="Image" width="350" height="300" >
      <h3> Description: {{$product->description}}</h3>
        <h4> Name: {{$product->name}}</h4>
        <h4>Price:{{$product->price}}</h4>
      <div><a href="/removecart/{{$product->cart_id}}/"> Remove</a></div>
    </div>
    @endforeach
</body>
</html>
