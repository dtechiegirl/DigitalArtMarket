@extends('header')
@section('content')
<?php
use App\Http\Controllers\ArtsController;
$total = 0;
if(Session::has('user')){
$total = ArtsController::cartItem();
}


?>
    
    
   
 

<body>
    <form action="/search">
        <div class="relative border-2 border-gray-100 m-30 rounded-lg">
            <div class="absolute top-4 left-3">
                <i
                    class="fa fa-search text-gray-400 z-20 hover:text-gray-500"
                ></i>
            </div>
            <input
                type="text"
                name="search"
                class="h-14 w-full pl-10 pr-20 rounded-lg z-0 focus:shadow focus:outline-none"
                placeholder="Search Art Works..."
            />
            <div class="absolute top-2 right-2">
                <button
                    type="submit"
                    class="h-10 w-20 text-white rounded-lg bg-red-500 hover:bg-red-600"
                >
                    Search
                </button>
            </div>
        </div>

        <div class="absolute top-30 right-10">
            <p> Hello {{Session::get('user')['name']}}</p>
        <a href="/logout" class="hover:text-laravel h-10 w-20 text-white rounded-lg bg-red-500 hover:bg-red-700">
          
            <i class="fa-solid fa-arrow-up"></i>
            Logout</a>
    
           
        </div>
    </form>
    <div class="mx-20">
      <a href="/cartlist">cart: {{$total}} Arts</a>
    </div>
   
    
        @foreach ($arts as $product)
        
     
        <div class="flex mt-20 mx-20">
          <a href="details/{{ $product['id']}}"><img
            class="hidden w-48 mr-6 md:block"
            src="{{$product->gallery ? asset('storage/' . $product->gallery): asset('images/img1.jpg') }}"
            alt=""
        /></a>

           
            <div>
                <h3 class="text-2xl">
                   Product Name: <a href="details/{{ $product['id']}}">{{ $product['name']}}</a>
                </h3>
                
                
                <div class="text-lg mt-4">
                  Price:   {{ $product['price']}}
                </div>
                <div class="text-lg mt-4">
                    Category:{{ $product['category']}}
               </div>
               
               Contact:<div><i class="fa-solid fa-phone"></i>{{ $product['seller']}}</div>
            Seller:<div><i class="fa-solid fa-phone"></i>{{ $product['contact']}}</div>
            </div>

            <div><a href="/removeart/{{$product['id']}}/"> Remove</a></div>
            @include('add_cart')
            <br><br>
            @extends('footer')
            @section('content')
            
            
         
            
            @endforeach
  
</body>
