<?php

namespace App\Http\Controllers;

use App\Order;

class DashboardController extends Controller
{
  function show()
  {
    $orders = Order::paginate(5);
    return view('admin.dashboard', compact('orders'));
  }

  function detail($id)
  {
    $orders = Order::find($id);
    return view('admin.order.detail', compact('orders'));
  }

  function delete($id)
  {
    $order = Order::find($id);
    $order->delete();
    return redirect('admin')->with('status', 'Xóa đơn hàng thành công');
  }
}
