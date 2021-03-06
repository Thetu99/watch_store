<?php

namespace App\Http\Controllers;
use App\Order;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
  function show()
  {
    $orders = Order::paginate(5);
    return view('admin.dashboard', compact('orders'));
  }
}
