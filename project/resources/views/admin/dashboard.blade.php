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
          @foreach ($customers as $key => $c)
          <tr>
            <th scope="row">{{$customers->firstItem() + $key}}</th>
            <td>{{$c->name}}</td>
            <td>{{$c->gender}}</td>
            <td>{{$c->phone}}</td>
            <td>{{$c->email}}</td>
            <td>{{$c->address}}</td>
            <td>{{$c->note}}</td>
            <td>{{date("G:i j-n-Y", strtotime($c->created_at))}}</td>
            <td>
              <a href="{{route('order.detail', $c->id)}}" class="btn btn-success btn-sm rounded-0 text-white" type="button" data-toggle="tooltip"
                data-placement="top" title="Chi tiết">
                <i class="fa fa-file-alt"></i>
              </a>

              <a href="{{route('order.delete', $c->id)}}" onclick="return confirm('Bạn có chắc chắn muốn xóa?')"
                class="btn btn-danger btn-sm rounded-0 text-white" type="button" data-toggle="tooltip"
                data-placement="top" title="Xóa">
                <i class="fa fa-trash"></i>
              </a>
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
      {{$customers->links()}}
    </div>
  </div>

</div>
@endsection