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
      <h5 class="m-0">Danh sách sản phẩm</h5>
      <div class="form-search form-inline">
        <form action="#" method="GET">
          <input type="text" name="keyword" value="{{request()->input('keyword')}}" class="form-control form-search"
            placeholder="Tìm kiếm">
          <input type="submit" name="btn-search" value="Tìm kiếm" class="btn btn-primary">
        </form>
      </div>
    </div>
    <div class="card-body">
      <div class="analytic">
        <a href="{{request()->fullUrlWithQuery(['status'=>'exist'])}}" class="text-primary">Hiện có <span
            class="text-muted">({{$count[0]}})</span></a>
        <a href="{{request()->fullUrlWithQuery(['status'=>'trash'])}}" class="text-primary">Thùng rác <span
            class="text-muted">({{$count[1]}})</span></a>
      </div>
      <form action="{{url('admin/product/action')}}" method="">
        <div class="form-action form-inline py-3">
          <select name="act" class="form-control mr-1" id="">
            <option>Chọn</option>
            @foreach ($list_act as $k => $act)
            <option value="{{$k}}">{{$act}}</option>
            @endforeach
          </select>
          <input type="submit" name="btn-search" value="Áp dụng" class="btn btn-primary">
        </div>
        <table class="table table-striped table-checkall">
          <thead>
            <tr>
              <th><input type="checkbox" name="checkall"></th>
              <th scope="col">#</th>
              <th scope="col">Tên</th>
              <th scope="col">Mô tả</th>
              <th scope="col">Giá tiền</th>
              <th scope="col">Ảnh</th>
              <th scope="col">Tác vụ</th>
            </tr>
          </thead>
          <tbody>
            @if ($products->total()>0)
            @php
            $t=0;
            @endphp
            @foreach ($products as $p)
            @php
            $t++;
            @endphp
            <tr>
              <td>
                <input type="checkbox" name="list_check[]" value="{{$p->id}}">
              </td>
              <td scope="row">{{$t}}</td>
              <td>{{$p->name}}</td>
              <td>{{$p->email}}</td>
              <td>{{number_format($p->price,0,'','.')}}đ</td>
              <td><img src="{{asset($p->thumbnail)}}" width="50px" /></td>
              <td>
                <a href="#" class="btn btn-success btn-sm rounded-0 text-white" type="button" data-toggle="tooltip"
                  data-placement="top" title="Edit"><i class="fa fa-edit"></i></a>

                <a href="{{route('delete_product', $p->id)}}" onclick="return confirm('Bạn có chắc chắn muốn xóa?')"
                  class="btn btn-danger btn-sm rounded-0 text-white" type="button" data-toggle="tooltip"
                  data-placement="top" title="Delete"><i class="fa fa-trash"></i></a>

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
      {{$products->links()}}
    </div>
  </div>
</div>
@endsection