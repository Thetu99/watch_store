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
      <h5 class="m-0">BÌNH LUẬN MỚI</h5>
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
          @if ($comments->total()>0)

          @foreach ($comments as $key => $c)
          <tr>
            <th>{{$comments->firstItem() + $key}}</th>
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
              <a href="{{route('comment.delete', $c->id)}}" onclick="return confirm('Bạn có chắc chắn muốn xóa?')"
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
      {{$comments->links()}}
    </div>
  </div>
</div>
@endsection