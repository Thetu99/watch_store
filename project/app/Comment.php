<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Comment extends Model
{
  use Notifiable;
  
  protected $fillable = ['product_id', 'name', 'content'];

  function product(){
    return $this->belongsTo('App\Product');
  }

  function reply(){
    return $this->hasMany('App\Reply');
  }
}
