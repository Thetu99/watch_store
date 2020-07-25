@extends('layouts.admin')
@section('content')
<div class="container-fluid py-4">
  <div class="card">
    <div class="card-header font-weight-bold">
      CHI TIẾT ĐƠN HÀNG
    </div>
    <div class="card-body">
      <table class="table table-striped">
        <thead>
          <tr>
            <th colspan="2">Thông tin khách hàng</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Tên khách hàng</td>
            <td>{{$customers->name}}</td>
          </tr>
          <tr>
            <td>Giới tính</td>
            <td>{{$customers->gender}}</td>
          </tr>
          <tr>
            <td>Ngày đặt hàng</td>
            <td>{{date("G:i j-n-Y", strtotime($customers->created_at))}}</td>
          </tr>
          <tr>
            <td>Số điện thoại</td>
            <td>{{$customers->phone}}</td>
          </tr>
          <tr>
            <td>Địa chỉ</td>
            <td>{{$customers->address}}</td>
          </tr>
          <tr>
            <td>Email</td>
            <td>{{$customers->email}}</td>
          </tr>
          <tr>
            <td>Thanh toán</td>
            <td>{{$customers->payment_method}}</td>
          </tr>
          <tr>
            <td>Ghi chú</td>
            <td>{{$customers->note}}</td>
          </tr>
        </tbody>
      </table>

      <table class="table table-striped">
        <thead>
          <th>STT</th>
          <th>Tên sản phẩm</th>
          <th>Hình ảnh</th>
          <th>Đơn giá</th>
          <th>Số lượng</th>
          <th>Tổng tiền</th>
        </thead>
        <tbody>
          @php
          $total = 0;
          @endphp
          @foreach ($orders as $key => $o)
          <tr>
            <td>{{$orders->firstItem() + $key}}</td>
            <td>{{$o->product_name}}</td>
            <td>
              <a target="blank" href="{{asset("image/product/$o->product_thumbnail")}}">
                <img src="{{asset("image/product/$o->product_thumbnail")}}" width="50px">
              </a>
            </td>
            <td>{{number_format($o->product_price, 0, '', '.')}}đ</td>
            <td>{{$o->product_qty}}</td>
            <td>{{number_format($o->product_price * $o->product_qty, 0, '', '.')}}đ</td>
          </tr>
          @php
          $total += $o->product_price * $o->product_qty;
          @endphp
          @endforeach
          <tr>
            <th colspan="5">Tổng đơn hàng:</th>
            <td style="color: red; font-weight: bold">{{number_format($total, 0, '', '.')}}đ</td>
          </tr>
        </tbody>
      </table>
      {{-- <nav aria-label="Page navigation example">
        <ul class="pagination">
          <li class="page-item">
            <a class="page-link" href="#" aria-label="Previous">
              <span aria-hidden="true">Trước</span>
              <span class="sr-only">Sau</span>
            </a>
          </li>
          <li class="page-item"><a class="page-link" href="#">1</a></li>
          <li class="page-item"><a class="page-link" href="#">2</a></li>
          <li class="page-item"><a class="page-link" href="#">3</a></li>
          <li class="page-item">
            <a class="page-link" href="#" aria-label="Next">
              <span aria-hidden="true">&raquo;</span>
              <span class="sr-only">Next</span>
            </a>
          </li>
        </ul>
      </nav> --}}
    </div>
  </div>

</div>
@endsection