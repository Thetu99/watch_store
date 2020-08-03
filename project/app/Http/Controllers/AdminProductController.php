<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Notifications\NoticeOrder;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminProductController extends Controller
{
  function list(Request $request)
  {
    $keyword = "";

    if ($request->keyword) {
      $keyword = $request->keyword;
    }

    $products = Product::where('name', 'like', "%{$keyword}%")->orderBy('created_at', 'desc')->paginate(5);

    return view('admin.product.list', compact('products'));
  }

  function add()
  {
    $brands = Brand::all();
    return view('admin.product.add', compact('brands'));
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
    
    $brands = Brand::all();

    return view('admin.product.edit', compact('product', 'brands'));
  }

  function update(Request $request, $id)
  {
    Product::where('id', $id)->update([
      'name' => $request->input('name'),
      'brand' => $request->input('brand'),
      'content' => $request->input('content'),
      'price' => $request->input('price'),
      'status' => $request->status
    ]);
    return redirect('admin/product/list')->with('status', 'Cập nhật sản phẩm thành công');
  }

  function delete($id)
  {
    $products = Product::find($id);
    $products->delete();
    return redirect('admin/product/list')->with('status', 'Đã xóa sản phẩm thành công');
  }

  function hotList(Request $request){
    $keyword = "";

    if ($request->keyword) {
      $keyword = $request->keyword;
    }

    $products = Product::where('name', 'like', "%{$keyword}%")->paginate(5);
    return view('admin.product.hot.list', compact('products'));
  }

  function hotAdd(Request $request){
    $keyword = "";

    if ($request->keyword) {
      $keyword = $request->keyword;
    }

    $products = Product::where('name', 'like', "%{$keyword}%")->paginate(5);
    return view('admin.product.hot.add', compact('products'));
  }

  function hotDelete(){

  }
}
