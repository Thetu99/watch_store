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
            <td>{{$orders->name}}</td>
          </tr>
          <tr>
            <td>Giới tính</td>
            <td>{{$orders->gender}}</td>
          </tr>
          <tr>
            <td>Ngày đặt hàng</td>
            <td>{{date("G:i j-n-Y", strtotime($orders->created_at))}}</td>
          </tr>
          <tr>
            <td>Số điện thoại</td>
            <td>{{$orders->phone}}</td>
          </tr>
          <tr>
            <td>Địa chỉ</td>
            <td>{{$orders->address}}</td>
          </tr>
          <tr>
            <td>Email</td>
            <td>{{$orders->email}}</td>
          </tr>
          <tr>
            <td>Ghi chú</td>
            <td>{{$orders->note}}</td>
          </tr>
        </tbody>
      </table>

      <table class="table table-striped">
        <thead>
          <th>STT</th>
          <th>Tên sản phẩm</th>
          <th>Hình ảnh</th>
          <th>Số lượng</th>
          <th>Giá tiền</th>
        </thead>
        <tbody>
          <td></td>
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