<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
  protected $fillable = ['product_id', 'name', 'content'];

  function product(){
    return $this->belongsTo('App\Product');
  }

  function reply(){
    return $this->hasMany('App\Reply');
  }
}
