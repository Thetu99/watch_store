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
      <h5 class="m-0">Toàn bộ sản phẩm</h5>
      <div class="form-search form-inline">
        <form method="GET" autocomplete="off">
          <input type="search" name="keyword" class="form-control form-search" placeholder="Tên sản phẩm">
          <button type="submit" class="btn btn-primary">Tìm kiếm</button>
        </form>
      </div>
    </div>
    <div class="card-body">
      <a href="{{url('admin/product/add')}}" class="btn btn-primary">Thêm mới</a>
      <table class="table table-striped table-checkall">
        <thead>
          <tr>
            <th>STT</th>
            <th>Tên</th>
            <th>Thương hiệu</th>
            <th>Mô tả</th>
            <th>Giá tiền</th>
            <th>Ảnh</th>
            <th>Tình trạng</th>
            <th>Ngày thêm</th>
            <th>Ngày cập nhật</th>
            <th style="width: 115px">Tác vụ</th>
          </tr>
        </thead>
        <tbody>
          @if ($products->total()>0)
          @foreach ($products as $key => $p)
          <tr>
            <td>{{$products->firstItem() + $key}}</td>
            <td>{{$p->name}}</td>
            <td>{{$p->brand}}</td>
            <td>{!!$p->content!!}</td>
            <td>{{number_format($p->price,0,'','.')}}đ</td>
            <td>
              <a href="{{asset("image/product/$p->thumbnail")}}" target="_blank">
                <img src="{{asset("image/product/$p->thumbnail")}}" width="50px" />
              </a>
            </td>
            <td>{{$p->status}}</td>
            <td>{{date("G:i j-n-Y", strtotime($p->created_at))}}</td>
            <td>{{date("G:i j-n-Y", strtotime($p->updated_at))}}</td>
            <td>
              <a href="{{route('edit_product', $p->id)}}" class="btn btn-success btn-sm">Sửa</a>

              <a href="{{route('delete_product', $p->id)}}" onclick="return confirm('Bạn có chắc chắn muốn xóa?')"
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
      {{$products->links()}}
    </div>
  </div>
</div>
@endsection