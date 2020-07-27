<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Reply;
use Illuminate\Http\Request;

class ReplyController extends Controller
{
  function show()
  {
  }

  function store(Request $request, $id)
  {
    $comment = Comment::find($id);
    Reply::create([
      'name' => $request->name,
      'content' => $request->content,
      'comment_id' => $comment->id
    ]);
    return redirect()->back();
  }
}
