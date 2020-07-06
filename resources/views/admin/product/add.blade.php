@extends('layouts.admin')
@section('content')
<div id="content" class="container-fluid bg-dark">
  <div class="card">
    <div class="card-header font-weight-bold">
      Thêm sản phẩm
    </div>
    <div class="card-body">
      <form action="{{url('admin/product/store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
          <label for="name">Tên sản phẩm</label>
          <input class="form-control" type="text" name="name" id="name">
          @error('name')
          <small class="text-danger">{{$message}}</small>
          @enderror
        </div>
        <div class="form-group">
          <label for="content">Mô tả</label>
          <textarea class="form-control" name="content" id="content" rows="10"></textarea>
          @error('content')
          <small class="text-danger">{{$message}}</small>
          @enderror
        </div>
        <div class="form-group">
          <label for="price">Giá tiền</label>
          <input class="form-control" type="text" name="price" id="price">
          @error('price')
          <small class="text-danger">{{$message}}</small>
          @enderror
        </div>
        <div class="form-group">
          <label for="thumbnail">Ảnh</label>
          <input class="form-control-file" type="file" name="thumbnail" id="thumbnail">
          @error('thumbnail')
          <small class="text-danger">{{$message}}</small>
          @enderror
        </div>

        <button type="submit" name="btn-add" value="Thêm mới" class="btn btn-primary">Thêm mới</button>
      </form>
    </div>
  </div>
</div>
@endsection