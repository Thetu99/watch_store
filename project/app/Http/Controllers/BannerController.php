<?php

namespace App\Http\Controllers;

use App\Banner;
use Illuminate\Http\Request;

class BannerController extends Controller
{
  function list(Request $request)
  {
    $keyword = "";
      if ($request->keyword) {
        $keyword = $request->keyword;
      }
      $banners = Banner::where('name', 'like', "%{$keyword}%")->paginate();
    return view('admin.banner.list', compact('banners'));
  }

  function add()
  {
    return view('admin.banner.add');
  }

  function store(Request $request)
  {
    $input = $request->all();

    $file = $request->file('thumbnail');
    $fileName = $file->getClientOriginalName();
    $file->move('public/image/banner/', $fileName);
    $input['thumbnail'] = $fileName;

    Banner::create($input);
    return redirect('admin/banner/list')->with('status', 'Thêm Banner thành công');
  }

  function edit($id)
  {
    $banners = Banner::find($id);
    return view('admin.banner.edit', compact('banners'));
  }

  function update(Request $request, $id)
  {
    Banner::where('id', $id)->update([
      'name' => $request->name,
      'thumbnail' => $request->thumbnail
    ]);
    return redirect('admin/banner/list')->with('status', 'Cập nhật Banner thành công');
  }

  function delete($id)
  {
    $banner = Banner::find($id);
    $banner->delete();
    return redirect('admin/banner/list')->with('status', 'Đã xóa Banner thành công');
  }
}
