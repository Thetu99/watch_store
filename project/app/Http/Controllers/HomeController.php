<?php

namespace App\Http\Controllers;

use App\Banner;
use App\Product;

class HomeController extends Controller
{
  public function show()
  {
    $banners = Banner::all();

    $products = Product::orderBy('created_at', 'desc')
      ->get();

    $randoms = Product::inRandomOrder()
      ->limit(16)
      ->get();

    return view('theme.home', compact('banners', 'products', 'randoms'));
  }
}
