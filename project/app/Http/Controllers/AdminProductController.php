<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminProductController extends Controller
{
  function list(Request $request)
  {
    $status = $request->input('status');

    $list_act = [
      'delete' => 'Xóa tạm thời'
    ];

    if ($status == 'trash') {
      $list_act = [
        'restore' => 'Khôi phục',
        'forceDelete' => 'Xóa vĩnh viễn'
      ];
      $products = Product::onlyTrashed()->paginate(5);
    } else {
      $keyword = "";
      if ($request->input('keyword')) {
        $keyword = $request->input('keyword');
      }
      $products = Product::where('name', 'like', "%{$keyword}%")->paginate(5);
    }

    $count_product_exist = Product::count();
    $count_product_trash = Product::onlyTrashed()->count();
    $count = [$count_product_exist, $count_product_trash];

    return view('admin.product.list', compact('products', 'count', 'list_act'));
  }

  function add()
  {
    return view('admin.product.add');
  }

  function store(Request $request)
  {
    $input = $request->all();
    
    $file = $request->file('thumbnail');
    $fileName = $file->getClientOriginalName();
    $file->move('public/image/product/', $fileName);
    $input['thumbnail'] = $fileName;
    
    Product::create($input);
    return redirect('admin/product/list')->with('status', 'Đã thêm sản phẩm thành công');
  }

  function edit($id)
  {
    $product = Product::find($id);
    return view('admin.product.edit', compact('product'));
  }

  function update(Request $request, $id)
  {
    Product::where('id', $id)->update([
      'name' => $request->input('name'),
      'brand' => $request->input('brand'),
      'content' => $request->input('content'),
      'price' => $request->input('price'),
    ]);
    return redirect('admin/product/list')->with('status', 'Cập nhật sản phẩm thành công');
  }

  function delete($id)
  {

    $products = Product::find($id);
    $products->delete();
    return redirect('admin/product/list')->with('status', 'Đã xóa sản phẩm thành công');
  }

  function action(Request $request)
  {
    $list_check = $request->input('list_check');

    if ($list_check) {
      if (!empty($list_check)) {
        $act = $request->input('act');
        if ($act == 'delete') {
          Product::destroy($list_check);
          return redirect('admin/product/list')->with('status', 'Xóa thành công');
        }

        if ($act == 'restore') {
          Product::withTrashed()->whereIn('id', $list_check)->restore();
          return redirect('admin/product/list')->with('status', 'Khôi phục thành công');
        }

        if ($act == 'forceDelete') {
          Product::withTrashed()->whereIn('id', $list_check)->forceDelete();
          return redirect('admin/product/list')->with('status', 'Xóa vĩnh viễn thành công');
        }
      }
      return redirect('admin/product/list')->with('status', 'Chưa chọn hành động cần thực hiện');
    } else {
      return redirect('admin/product/list')->with('status', 'Chưa chọn phần tử cần thực thi');
    }
  }
}
