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
    /* return $products; */
    return view('theme.product', compact('products'));
  }
}
