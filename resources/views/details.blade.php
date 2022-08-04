@extends('header')
@section('content')
<body>
   
 
   
     
        <div class="flex mx-20 mt-20">
            <img
                class="hidden w-48 mr-6 md:block"
                src="{{$product->gallery ? asset('storage/' . $product->gallery): asset('images/img1.jpg') }}"
                alt=""
            />

           
            <div>
                <h3 class="text-2xl">
                    Product Name: <a href="details/{{$product['id']}}">{{$product['name']}}</a>
                </h3>
                
                
                <div class="text-lg mt-4">
                  Price:   {{$product['price']}}
                </div>
                <div class="text-lg mt-4">
                  Category:  {{$product['category']}}
               </div>
               <div class="text-lg mt-4">
             Description:   {{$product['description']}}
           </div>
           <div class="text-lg mt-4">
           Seller Details: {{$product['seller']}}
       
                <div><i class="fa-solid fa-phone"></i>{{$product['seller-contact']}}</div>
            </div>
        </div>
        
        @include('add_cart')
        {{-- <button
        type="submit"
        class="bg-laravel text-white rounded py-2 px-4 hover:bg-black"
    >
        Buy Now!
    </button> --}}
    <a href="/arts" class="">Go Back!</a>
    </div>
    
  
</body>

@extends('footer')