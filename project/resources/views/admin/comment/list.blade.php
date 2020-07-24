@extends('layouts.admin')
@section('content')
<div class="container-fluid py-4">
  <div class="card">
    <div class="card-header font-weight-bold">
      BÌNH LUẬN MỚI
    </div>
    <div class="card-body">
      <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">STT</th>
            <th scope="col">Tên</th>
            <th scope="col">Nội dung</th>
            <th scope="col">Sản phẩm</th>
            <th scope="col">Hình ảnh</th>
            <th scope="col">Thời gian</th>
            <th scope="col" style="width: 100px">Tác vụ</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($comments as $key => $c)
          <tr>
            <th scope="row">{{$comments->firstItem() + $key}}</th>
            <td>{{$c->name}}</td>
            <td>{{$c->content}}</td>
            <td>{{$c->product->name}}</td>
            <td>
              <a target="blank" href="{{asset("image/product/{$c->product->thumbnail}")}}">
                <img width="50px" src="{{asset("image/product/{$c->product->thumbnail}")}}">
              </a>
            </td>
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
      {{$comments->links()}}
    </div>
  </div>

</div>
@endsection