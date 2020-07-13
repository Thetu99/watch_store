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
    /* Cart::destroy(); */
    $product = Product::find($id);
    Cart::add([
      'id' => $product->id,
      'name' => $product->name,
      'qty' => 1,
      'price' => $product->price,
      'options' => [
        'thumbnail' => $product->thumbnail
      ]
    ]);
    /* echo "<pre>";
    print_r(Cart::content());
    echo "</pre>"; */
    return redirect('cart');
  }

  function remove($rowId)
  {
    Cart::remove($rowId);
    return redirect('cart');
  }

  function update(Request $request)
  {
    $data = $request->get('qty');
    foreach ($data as $k => $v) {
      Cart::update($k, $v);
    }
    return redirect('cart');
  }
}
