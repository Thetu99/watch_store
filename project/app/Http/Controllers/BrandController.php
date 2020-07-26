<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BrandController extends Controller
{
  function show($brand)
  {
    $brands = Brand::where('name', $brand)->get();
    $news = Product::where('brand', $brand)->orderBy('created_at', 'desc')->paginate(6);
    return view('theme.brand', compact('brands', 'news'));
  }

  function list(Request $request)
  {
    $keyword = "";
      if ($request->keyword) {
        $keyword = $request->keyword;
      }
      $brands = Brand::where('name', 'like', "%{$keyword}%")->paginate();
    return view('admin.brand.list', compact('brands'));
  }

  function add()
  {
    return view('admin.brand.add');
  }

  function store(Request $request)
  {
    $input = $request->all();

    $file = $request->file('thumbnail');
    $fileName = $file->getClientOriginalName();
    $file->move('public/image/brand/', $fileName);
    $input['thumbnail'] = $fileName;

    Brand::create($input);
    return redirect('admin/brand/list')->with('status', 'Thêm thương hiệu thành công');
  }

  function edit($id)
  {
    $brand = Brand::find($id);
    return view('admin.brand.edit', compact('brand'));
  }

  function update(Request $request, $id)
  {
    Brand::where('id', $id)->update([
      'name' => $request->name,
      'thumbnail' => $request->thumbnail
    ]);
    return redirect('admin/brand/list')->with('status', 'Cập nhật thương hiệu thành công');
  }

  function delete($id)
  {
    $brand = Brand::find($id);
    $brand->delete();
    return redirect('admin/brand/list')->with('status', 'Đã xóa thương hiệu thành công');
  }
}
