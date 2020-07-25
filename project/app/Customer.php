<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
  protected $fillable = [
    'name',
    'gender',
    'address',
    'phone',
    'email',
    'note',
    'payment_method'
  ];

  function order()
  {
    return $this->hasMany('App\Order');
  }
}
