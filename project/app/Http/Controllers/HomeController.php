<?php

namespace App\Http\Controllers;

use App\Banner;
use App\Product;

class HomeController extends Controller
{
  public function show()
  {
    $banners = Banner::all();

    $products = Product::orderBy('updated_at', 'desc')
      ->get();

    $randoms = Product::inRandomOrder()
      ->limit(12)
      ->get();

    return view('theme.home', compact('banners', 'products', 'randoms'));
  }
}
