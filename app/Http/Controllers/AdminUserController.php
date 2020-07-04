<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminUserController extends Controller
{
  function list(Request $request)
  {
    $status = $request->input('status');
    if ($status == 'trash') {
      $users = User::onlyTrashed()->paginate(5);
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

    return view('admin.user.list', compact('users', 'count'));
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
}
