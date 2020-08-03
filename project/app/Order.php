<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Order extends Model
{
  use Notifiable;

  protected $fillable = [
    'product_name',
    'customer_id',
    'product_qty',
    'product_price',
    'product_thumbnail'
  ];

  function customer()
  {
    return $this->belongsTo('App\Customer');
  }
}
