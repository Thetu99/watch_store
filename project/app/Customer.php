<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Customer extends Model
{
  use Notifiable;
  
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
