<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Product;
use Illuminate\Http\Request;

class CommentController extends Controller
{
  function list(){
    $comments = Comment::paginate(10);
    return view('admin.comment.list', compact('comments'));
  }

  function store(Request $request, $id)
  {
    $product = Product::find($id);
    Comment::create([      
      'name' => $request->name,
      'content' => $request->content,
      'product_id' => $product->id
    ]);
    return redirect()->back();
  }
}
