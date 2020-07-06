<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminUserController extends Controller
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
      $users = Product::onlyTrashed()->paginate(5);
    } else {
      $keyword = "";
      if ($request->input('keyword')) {
        $keyword = $request->input('keyword');
      }
      $users = User::where('name', 'like', "%{$keyword}%")->paginate(5);
    }

    $count_user_active = User::count();
    $count_user_trash = User::onlyTrashed()->count();
    $count = [$count_user_active, $count_user_trash];

    return view('admin.user.list', compact('users', 'count', 'list_act'));
  }

  function add()
  {
    return view('admin.user.add');
  }

  function store(Request $request)
  {
    $request->validate(
      [
        'name' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:users',
        'password' => 'required|string|min:8|confirmed'
      ],
      [
        'required' => ':attribute không được để trống',
        'min' => ':attribute có độ dài ít nhất :min ký tự',
        'max' => ':attribute có độ dài tối đa :max ký tự',
        'confirmed' => 'Xác nhận mật khẩu không thành công'
      ],
      [
        'name' => 'Tên người dùng',
        'email' => 'Email',
        'password' => 'Mật khẩu'
      ]
    );

    User::create([
      'name' => $request->input('name'),
      'email' => $request->input('email'),
      'password' => Hash::make($request->input('password'))
    ]);

    return redirect('admin/user/list')->with('status', 'Đã thêm thành viên thành công');
  }

  function delete($id)
  {
    if (Auth::id() != $id) {
      $user = User::find($id);
      $user->delete();
      return redirect('admin/user/list')->with('status', 'Đã xóa thành viên thành công');
    } else {
      return redirect('admin/user/list')->with('status', 'Không thể tự xóa chính mình');
    }
  }

  function action(Request $request)
  {
    $list_check = $request->input('list_check');

    if ($list_check) {
      foreach ($list_check as $k => $id) {
        if (Auth::id() == $id) {
          unset($list_check[$k]);
        }
      }

      if (!empty($list_check)) {
        $act = $request->input('act');
        if ($act == 'delete') {
          User::destroy($list_check);
          return redirect('admin/user/list')->with('status', 'Xóa thành công');
        }

        if ($act == 'restore') {
          User::withTrashed()->whereIn('id', $list_check)->restore();
          return redirect('admin/user/list')->with('status', 'Khôi phục thành công');
        }

        if ($act == 'forceDelete') {
          User::withTrashed()->whereIn('id', $list_check)->forceDelete();
          return redirect('admin/user/list')->with('status', 'Xóa vĩnh viễn User thành công');
        }
      }
      return redirect('admin/user/list')->with('status', 'Không thể thao tác trên tài khoản của bạn');
    } else {
      return redirect('admin/user/list')->with('status', 'Chưa chọn phần tử cần thực thi');
    }
  }
}
