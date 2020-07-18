<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BrandController extends Controller
{
  function show($brand)
  {
    $brands = Product::where('brand', 'like', "%{$brand}%")->limit(3)->get()->sortByDesc('created_at');
    $randoms = Product::where('brand', 'like', "%{$brand}%")->inRandomOrder()->limit(3)->get();
    /* return $randoms; */
    return view('theme.brand', compact('brands', 'randoms'));
  }
}
