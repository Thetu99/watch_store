<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Notifications\NoticeOrder;
use App\Order;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

use function GuzzleHttp\Promise\all;

class CheckOutController extends Controller
{
  function show()
  {
    $products = Cart::content();
    return view('theme.checkout', compact('products'));
  }

  function order(Request $request)
  {
    $customer = Customer::create([
      'name' => $request->input('name'),
      'gender' => $request->input('gender'),
      'email' => $request->input('email'),
      'address' => $request->input('address'),
      'phone' => $request->input('phone'),
      'note' => $request->input('note'),
      'payment_method' => $request->payment_method
    ]);

    $customer_id = Customer::where('email', $request->email)->first();
    /* return $customer_id; */
    foreach (Cart::content() as $cart) {
      Order::create([
        'product_name' => $cart->name,
        'customer_id' => $customer_id->id,
        'product_qty' => $cart->qty,
        'product_price' => $cart->price,
        'product_thumbnail' => $cart->options->thumbnail
      ]);
    }

    Cart::destroy();

    return redirect('checkout/success');
  }

  function success()
  {
    return view('theme.success');
  }
}
