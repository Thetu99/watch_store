<?php

namespace App\Http\Controllers;

use App\Banner;
use App\Product;

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
    $banners = Banner::all();    
    $products = Product::limit(8)->orderBy('created_at', 'desc')->get();
    $randoms = Product::inRandomOrder()->limit(8)->get();

    return view('theme.home', compact('banners', 'products', 'randoms'));
  }
}
