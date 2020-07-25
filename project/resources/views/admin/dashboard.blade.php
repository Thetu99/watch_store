@extends('layouts.admin')
@section('content')
<div id="content" class="container-fluid">
  <div class="card">

    @if (session('status'))
    <div class="alert bg-success text-white">
      {{session('status')}}
    </div>
    @endif

    <div class="card-header font-weight-bold d-flex justify-content-between align-items-center">
      <h5 class="m-0">ĐƠN HÀNG MỚI</h5>
      <div class="form-search form-inline">
        <form action="" method="GET" autocomplete="off">
          <input type="search" name="keyword" class="form-control form-search" placeholder="Tìm kiếm">
          <button type="submit" class="btn btn-primary">Tìm kiếm</button>
        </form>
      </div>
    </div>
    <div class="card-body">
      <table class="table table-striped table-checkall">
        <thead>
          <tr>
            <th>STT</th>
            <th>Khách hàng</th>
            <th>Giới tính</th>
            <th>Số điện thoại</th>
            <th>Email</th>
            <th>Địa chỉ</th>
            <th>Ghi chú</th>
            <th>Thanh toán</th>
            <th>Thời gian</th>
            <th style="width: 132px">Tác vụ</th>
          </tr>
        </thead>
        <tbody>
          @if ($customers->total()>0)
          @foreach ($customers as $key => $c)
          <tr>
            <th scope="row">{{$customers->firstItem() + $key}}</th>
            <td>{{$c->name}}</td>
            <td>{{$c->gender}}</td>
            <td>{{$c->phone}}</td>
            <td>{{$c->email}}</td>
            <td>{{$c->address}}</td>
            <td>{{$c->note}}</td>
            <td>{{$c->payment_method}}</td>
            <td>{{date("G:i j-n-Y", strtotime($c->created_at))}}</td>
            <td>
              <a href="{{route('order.detail', $c->id)}}" class="btn btn-success btn-sm">Chi tiết</a>

              <a href="{{route('order.delete', $c->id)}}" onclick="return confirm('Bạn có chắc chắn muốn xóa?')"
                class="btn btn-danger btn-sm">Xóa</a>
            </td>
          </tr>
          @endforeach
          @else
          <tr>
            <td colspan="7" class="bg-white">Không tìm thấy bản ghi</td>
          </tr>
          @endif

        </tbody>
      </table>
      </form>
      {{$customers->links()}}
    </div>
  </div>
</div>
@endsection