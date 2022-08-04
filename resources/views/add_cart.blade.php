
        <form action="/add_product" method="POST">
            @csrf
            <input type="hidden" name="product_id" value="{{$product['id']}}">
       
            <div class="mb-6 mt-30">
            <button
            type="submit"
            class="bg-laravel text-white rounded py-2 px-4 hover:bg-black"
        >
            Add to Cart
        </button>

        <form action="/ordernow" method="POST">
            @csrf
            <input type="hidden" name="product_id" value="{{$product['id']}}">
       
           
          @extends('header')
@section('content')

        
    
        </div>
        <a href=""></a>
    </form>
        