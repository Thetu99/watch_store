<?php

namespace App\Http\Controllers;

use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class CheckOutController extends Controller
{
  function show()
  {
    $products = Cart::content();
    return view('theme.checkout', compact('products'));
  }
}
