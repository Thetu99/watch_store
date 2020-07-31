<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BrandController extends Controller
{
  function show($brand, $price = null, $status = null)
  {
    $brands = Brand::where('name', $brand)->get();

    if ($price == "all") {
      if ($status == "all") {
        $news = Product::where('brand', $brand)
          ->orderBy('price', 'asc')
          ->paginate(8);
      } elseif ($status == "yes") {
        $news = Product::where('brand', $brand)
          ->where('status', 'Còn hàng')
          ->orderBy('price', 'asc')
          ->paginate(8);
      } elseif ($status = "no") {
        $news = Product::where('brand', $brand)
          ->where('status', 'Hết hàng')
          ->orderBy('price', 'asc')
          ->paginate(8);
      }
    } elseif ($price == "<1") {
      if ($status == "all") {
        $news = Product::where('brand', $brand)
          ->where('price', '<', 1000000)
          ->orderBy('price', 'asc')
          ->paginate(8);
      } elseif ($status == "yes") {
        $news = Product::where('brand', $brand)
          ->where('price', '<', 1000000)
          ->where('status', 'Còn hàng')
          ->orderBy('price', 'asc')
          ->paginate(8);
      } elseif ($status = "no") {
        $news = Product::where('brand', $brand)
          ->where('price', '<', 1000000)
          ->where('status', 'Hết hàng')
          ->orderBy('price', 'asc')
          ->paginate(8);
      }
    } elseif ($price == '1-3') {
      if ($status == "all") {
        $news = Product::where('brand', $brand)
          ->whereBetween('price', [1000000, 3000000])
          ->orderBy('price', 'asc')
          ->paginate(8);
      } elseif ($status == "yes") {
        $news = Product::where('brand', $brand)
          ->whereBetween('price', [1000000, 3000000])
          ->where('status', 'Còn hàng')
          ->orderBy('price', 'asc')
          ->paginate(8);
      } elseif ($status = "no") {
        $news = Product::where('brand', $brand)
          ->whereBetween('price', [1000000, 3000000])
          ->where('status', 'Hết hàng')
          ->orderBy('price', 'asc')
          ->paginate(8);
      }
    } elseif ($price == '3-5') {
      if ($status == "all") {
        $news = Product::where('brand', $brand)
          ->whereBetween('price', [3000000, 5000000])
          ->orderBy('price', 'asc')
          ->paginate(8);
      } elseif ($status == "yes") {
        $news = Product::where('brand', $brand)
          ->whereBetween('price', [3000000, 5000000])
          ->where('status', 'Còn hàng')
          ->orderBy('price', 'asc')
          ->paginate(8);
      } elseif ($status = "no") {
        $news = Product::where('brand', $brand)
          ->whereBetween('price', [3000000, 5000000])
          ->where('status', 'Hết hàng')
          ->orderBy('price', 'asc')
          ->paginate(8);
      }
    } elseif ($price == '>5') {
      if ($status == "all") {
        $news = Product::where('brand', $brand)
          ->where('price', '>', 5000000)
          ->orderBy('price', 'asc')
          ->paginate(8);
      } elseif ($status == "yes") {
        $news = Product::where('brand', $brand)
          ->where('price', '>', 5000000)
          ->where('status', 'Còn hàng')
          ->orderBy('price', 'asc')
          ->paginate(8);
      } elseif ($status = "no") {
        $news = Product::where('brand', $brand)
          ->where('price', '>', 5000000)
          ->where('status', 'Hết hàng')
          ->orderBy('price', 'asc')
          ->paginate(8);
      }
    }
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
