<?php

namespace App\Http\Controllers;

use App\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
  function show()
  {
    return view('theme.cart');
  }

  function add($id)
  {
    $product = Product::find($id);

    if ($product->status == 'Còn hàng') {      
      Cart::add([
        'id' => $product->id,
        'name' => $product->name,
        'qty' => 1,
        'price' => $product->price,
        'options' => ['thumbnail' => $product->thumbnail]
      ]);
      
      return redirect('cart');
    }
    else{
      echo "<script>alert('Sản phẩm tạm thời hết hàng')</script>";
      echo "<script>window.history.back()</script>";
    }

    
  }

  function remove($rowId)
  {
    Cart::remove($rowId);
    return redirect('cart');
  }

  function update(Request $request)
  {
    $data = $request->qty;
    foreach ($data as $k => $v) {
      Cart::update($k, $v);
    }
    return redirect('cart');
  }
}
