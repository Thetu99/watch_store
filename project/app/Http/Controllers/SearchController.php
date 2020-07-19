<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class SearchController extends Controller
{
  public function search(Request $request)
  {
    $products = Product::where('name', 'like', '%' . $request->key . '%')
      ->orWhere('price', $request->key)
      ->get();
    return view('theme.timkiem', compact('products'));
  }
}
