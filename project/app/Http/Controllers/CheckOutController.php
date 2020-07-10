<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckOutController extends Controller
{
  function show(){
    return view('theme.checkout');
  }
}
