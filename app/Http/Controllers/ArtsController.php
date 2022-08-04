<?php

namespace App\Http\Controllers;

use Session;
use App\Models\arts;
use App\Models\cart;
use App\Models\order;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;

class ArtsController extends Controller
{
    //
    function index(){
    $data = arts::all();
    return view('arts', ['arts'=>$data]);
}
function detail($id){
    $data =  arts::find($id);
    return view('details', ['product'=> $data]);
}

function search(Request $req){
    $data = arts::where('name', 'like', '%'. $req->input('search'). '%')->get();
    if($data){
        return view('search', ['arts'=> $data]);
    }else{
        return 'no match found';
    }
   
  }

  function add(Request $req){
    if($req->session()->has('user')){
        $cart = new Cart;
        $cart->user_id= $req->session()->get('user')['id'];
        $cart->product_id= $req->product_id;
        $cart->save();
        return redirect('/arts');

    }else{
        return redirect('/login');
    }
    
  }

 static function cartItem(){
    $user_id=Session::get('user')['id'];
    return Cart::where('user_id',$user_id)->count();
  }

  function cartlist(){
    $user_id=Session::get('user')['id'];
    $arts = DB::table('cart')
    ->join('arts', 'cart.product_id','=','arts.id')
    ->where('cart.user_id', $user_id)
    ->select('arts.*', 'cart.id as cart_id')
    ->get();

    return view('cartlist', ['arts'=> $arts]);
  }

   function ordernow(){
    $user_id=Session::get('user')['id'];
    $total=  $arts = DB::table('cart')
    ->join('arts', 'cart.product_id','=','arts.id')
    ->where('cart.user_id', $user_id)
    ->sum('arts.price');
  

    return view('ordernow', ['total'=> $total]);
   }

  function remove($id){
    Cart::destroy($id);
    return redirect('arts');
  }
  function removeart($id){
   
    arts::destroy($id);
    return redirect('arts');
  }
  function orderplace(Request $req){
    $user_id=Session::get('user')['id'];
     $allcart = Cart::where('user_id', $user_id)->get();
    foreach($allcart as $cart){
        $order = new Order;
        $order->arts_id = $cart['product_id'];
        $order->user_id = $cart['user_id'];
        $order->status = "pending";
        $order->payment_method = $req->payment;
        $order->payment_status = "pending";
        $order-> address= $req->address;
        $order->save();

        Cart::where('user_id', $user_id)->delete();

    }
    $req->input();
    return redirect('/');

  }

  function addarts(Request $req){
    $user_id=Session::get('user')['id'];
    $user = new Arts;
    $user->name =$req->name;
    $user->email =$req->email;
    $user->price =$req->price;
    $user->category =$req->category;
    $user->description =$req->description;
    $user->seller =$req->seller;
    $user->contact =$req->contact;

    if($req->hasFile('gallery')) {
    $user->gallery = $req->file('gallery')->store('arts', 'public');
    }
    $user->save();
     return redirect('/arts');
    
  }
}

// $artsFields = $request->validate([
//   'name' => 'required',
//   'email'=> 'required',
//   'price'=> 'required',
//   'category' => 'required',
//   'description'=> 'required',
//   'seller'=> 'required',
//   'contact'=> 'required'
// ]);