<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class SearchController extends Controller
{
  function search(Request $request)
  {
    $products = Product::where('name', 'like', '%' . $request->key . '%')
      ->orWhere('price', $request->key)
      ->paginate(8);
    return view('theme.search', compact('products'));
  }

  function filter($id)
  {
    $title = [];
    if ($id == '<1m') {
      $title[] = "Sản phẩm có giá dưới 1 triệu đồng";
      $filter = Product::where('price', '<', 1000000)->paginate(8);
    }

    if ($id == '1m-3m') {
      $title[] = "Sản phẩm có giá từ 1-3 triệu đồng";
      $filter = Product::whereBetween('price', [1000000, 3000000])->paginate(8);
    }

    if ($id == '3m-5m') {
      $title[] = "Sản phẩm có giá từ 3-5 triệu đồng";
      $filter = Product::whereBetween('price', [3000000, 5000000])->paginate(8);
    }

    if ($id == '>5m') {
      $title[] = "Sản phẩm có giá trên 5 triệu đồng";
      $filter = Product::where('price', '>', 5000000)->paginate(8);
    }
    
    return view('theme.filter', compact('filter', 'title'));
  }
}
