<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
  /**
   * Create a new controller instance.
   *
   * @return void
   */

  /**
   * Show the application dashboard.
   *
   * @return \Illuminate\Contracts\Support\Renderable
   */
  public function show()
  {
    $products = Product::all();
    $random_1 = Product::inRandomOrder()->get();
    $random_2 = Product::inRandomOrder()->get();
    return view('theme.home', compact('products', 'random_1', 'random_2'));
  }
}
