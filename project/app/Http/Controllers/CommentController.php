<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Product;
use App\Reply;
use Illuminate\Http\Request;

class CommentController extends Controller
{
  function list(Request $request)
  {
    $keyword = "";

    if ($request->keyword) {
      $keyword = $request->keyword;
    }

    $comments = Comment::with('reply')->where('name', 'like', "%{$keyword}%")->orWhere('content', 'like', "%{$keyword}%")
      ->orderBy('created_at', 'desc')
      ->paginate(10);

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

  function delete($id)
  {
    $comment = Comment::find($id);
    $comment->delete();
    return redirect('admin/comment/list')->with('status', 'Xóa bình luận thành công');
  }
}
