<?php

namespace App\Http\Controllers;

use App\Order;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class CheckOutController extends Controller
{
  function show()
  {
    $products = Cart::content();
    return view('theme.checkout', compact('products'));
  }

  function order(Request $request){
    Order::create([
      'name' => $request->input('name'),
      'gender' => $request->input('gender'),
      'email' => $request->input('email'),
      'address' => $request->input('address'),
      'phone' => $request->input('phone'),
      'note' => $request->input('note'),
    ]);

    return redirect('/');
  }
}
