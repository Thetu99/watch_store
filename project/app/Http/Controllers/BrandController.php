<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class BrandController extends Controller
{
  function show($brand)
  {
    $brand = Product::all();
    return view('theme.brand', compact('brand'));
  }
}
