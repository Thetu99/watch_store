<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;

class Product extends Model
{
  protected $fillable = [
    'name', 'brand', 'content', 'price', 'thumbnail'
  ];

  function comment()
  {
    return $this->hasMany('App\Comment');
  }
}
