<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
  function show($id)
  {
    $products = Product::find($id);
    $news = Product::orderBy('created_at', 'desc')->limit(4)->get();
    $randoms = Product::inRandomOrder()->limit(3)->get();
    /* return $products; */
    return view('theme.product', compact('products', 'randoms', 'news'));
  }
}
