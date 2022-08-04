@extends('header')
@section('content')

<body>
   
 
    
        @foreach ($arts as $item)
        
     
        <div class="flex mt-20 mx-20">
          <a href="details/{{$item['id']}}"><img
            class="hidden w-48 mr-6 md:block"
            src="{{$item->gallery ? asset('storage/' . $item->gallery): asset('images/img1.jpg') }}"
            alt=""
        /></a>

           
            <div>
                <h3 class="text-2xl">
                   Product Name: <a href="details/{{$item['id']}}">{{$item['name']}}</a>
                </h3>
                
                
                <div class="text-lg mt-4">
                  Price:   {{$item['price']}}
                </div>
                <div class="text-lg mt-4">
                    Category:{{$item['category']}}
               </div>
               
            Contact Seller:    <div><i class="fa-solid fa-phone"></i>{{$item['seller-contact']}}</div>
            </div>

            <div class="mb-6 mt-20  ">
                <button
                type="submit"
                class="bg-laravel text-white rounded py-2 px-4 hover:bg-black"
            >
                Add to Cart
            </button>
            <br><br>
         
                <button
                type="submit"
                class="bg-laravel text-white rounded py-2 px-4 hover:bg-black"
            >
               Buy Now!
            </button>
            </div>
            @endforeach
  
</body>

@extends('footer')