<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
  protected $fillable = ['name', 'gender', 'address', 'phone', 'email', 'note'];
}
