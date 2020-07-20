<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Order;

class DashboardController extends Controller
{
  function show()
  {
    $customers = Customer::paginate(5);
    return view('admin.dashboard', compact('customers'));
  }

  function detail($id)
  {
    $customers = Customer::find($id);
    $orders = Order::where('customer_id', $id)->paginate();
    return view('admin.order.detail', compact('customers', 'orders'));
  }

  function delete($id)
  {
    $customer = Customer::find($id);
    $customer->delete();
    return redirect('admin')->with('status', 'Xóa đơn hàng thành công');
  }
}
