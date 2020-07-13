@extends('layouts.admin')
@section('content')
<div class="container-fluid py-4">
  {{-- <div class="row">
    <div class="col">
      <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
        <div class="card-header">ĐƠN HÀNG THÀNH CÔNG</div>
        <div class="card-body">
          <h5 class="card-title">2.680</h5>
          <p class="card-text">Đơn hàng giao dịch thành công</p>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
        <div class="card-header">ĐANG XỬ LÝ</div>
        <div class="card-body">
          <h5 class="card-title">10</h5>
          <p class="card-text">Số lượng đơn hàng đang xử lý</p>
        </div>
      </div>
    </div>

    <div class="col">
      <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
        <div class="card-header">DOANH SỐ</div>
        <div class="card-body">
          <h5 class="card-title">2.5 tỷ</h5>
          <p class="card-text">Doanh số hệ thống</p>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card text-white bg-dark mb-3" style="max-width: 18rem;">
        <div class="card-header">ĐƠN HÀNG HỦY</div>
        <div class="card-body">
          <h5 class="card-title">125</h5>
          <p class="card-text">Số đơn bị hủy trong hệ thống</p>
        </div>
      </div>
    </div>
  </div> --}}
  <!-- end analytic  -->
  <div class="card">
    <div class="card-header font-weight-bold">
      ĐƠN HÀNG MỚI
    </div>
    <div class="card-body">
      <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">STT</th>
            <th scope="col">Khách hàng</th>
            <th scope="col">Giới tính</th>
            <th scope="col">Số điện thoại</th>
            <th scope="col">Email</th>
            <th scope="col">Địa chỉ</th>
            <th scope="col">Ghi chú</th>
            <th scope="col">Thời gian</th>
            <th scope="col" style="width: 100px">Tác vụ</th>
          </tr>
        </thead>
        <tbody>
          @php
          $i=0;
          @endphp
          @foreach ($orders as $o)
          @php
          $i++;
          @endphp
          <tr>
            <th scope="row">{{$i}}</th>
            <td>{{$o->name}}</td>
            <td>{{$o->gender}}</td>
            <td>{{$o->phone}}</td>
            <td>{{$o->email}}</td>
            <td>{{$o->address}}</td>
            <td><textarea name="" cols="20" rows="3" style="border: none">{{$o->note}}</textarea></td>
            <td>{{date("G:i j-n-Y", strtotime($o->created_at))}}</td>
            <td>
              <a href="#" class="btn btn-success btn-sm rounded-0 text-white" type="button" data-toggle="tooltip"
                data-placement="top" title="Chi tiết"><i class="far fa-file-alt"></i></a>
            </td>
          </tr>
          @endforeach


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
      {{$orders->links()}}
    </div>
  </div>

</div>
@endsection