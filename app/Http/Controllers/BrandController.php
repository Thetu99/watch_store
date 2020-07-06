<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandController extends Controller
{
  function show($name){
    
    return view('theme.brand');
  }
}
