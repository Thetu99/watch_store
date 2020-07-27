<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Product;
use App\Reply;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
  function show($id)
  {
    $products = Product::find($id);
    $relations = Product::where('brand', $products->brand)->limit(3)->get();
    $news = Product::orderBy('created_at', 'desc')->limit(4)->get();
    $randoms = Product::inRandomOrder()->limit(3)->get();
    $comments = Comment::where('product_id', $id)->orderBy('created_at', 'desc')->paginate(5);
    $replies = Reply::where('comment_id', $id)->orderBy('created_at', 'desc')->paginate();
    return view('theme.product', compact('products', 'relations', 'randoms', 'news', 'comments', 'replies'));
  }
}
