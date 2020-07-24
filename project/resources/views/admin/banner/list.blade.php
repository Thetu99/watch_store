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
      <h5 class="m-0">Danh sách Banner</h5>
      <div class="form-search form-inline">
        <form action="{{url('admin/banner/list')}}" method="GET" autocomplete="off">
          <input type="text" name="keyword" value="{{request()->keyword}}" class="form-control form-search"
            placeholder="Tìm kiếm">
          <input type="submit" name="btn-search" value="Tìm kiếm" class="btn btn-primary">
        </form>
      </div>
    </div>
    <div class="cart-body">
      <table class="table table-striped">
        <thead>
          <th>STT</th>
          <th>Tên Banner</th>
          <th>Hình ảnh</th>
          <th style="width: 100px">Tác vụ</th>
        </thead>

        <tbody>
          @foreach ($banners as $k => $b)
          <tr>
            <td>{{$banners->firstItem() +$k}}</td>
            <td>{{$b->name}}</td>
            <td><a target="blank" href="{{asset("image/banner/$b->thumbnail")}}"><img width="200px"
                  src="{{asset("image/banner/$b->thumbnail")}}"></a></td>
            <td>
              <a href="{{route('banner.edit', $b->id)}}" class="btn btn-success btn-sm rounded-0 text-white"
                type="button" data-toggle="tooltip" data-placement="top" title="Sửa"><i class="fa fa-edit"></i></a>

              <a href="{{route('banner.delete', $b->id)}}" onclick="return confirm('Bạn có chắc chắn muốn xóa?')"
                class="btn btn-danger btn-sm rounded-0 text-white" type="button" data-toggle="tooltip"
                data-placement="top" title="Xóa"><i class="fa fa-trash"></i></a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>

  </div>
</div>
@endsection