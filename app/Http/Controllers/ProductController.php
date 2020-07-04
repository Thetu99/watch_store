<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
  function show($id)
  {
    $products = Product::find($id);
    return view('theme.product', compact('products'));
  }
}
