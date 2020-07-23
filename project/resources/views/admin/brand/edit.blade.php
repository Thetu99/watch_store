@extends('layouts.admin')
@section('content')
<div id="content" class="container-fluid">
  <div class="card">
    <div class="card-header font-weight-bold">
      Cập nhật thương hiệu
    </div>
    <div class="card-body">
      <form action="{{url('admin/brand/update', $brand->id)}}" method="POST" enctype="multipart/form-data" autocomplete="off">
        @csrf
        <div class="form-group">
          <label for="name">Tên thương hiệu</label>
        <input class="form-control" type="text" name="name" id="name" value="{{$brand->name}}" required>
        </div>        

        <button type="submit" name="btn-add" value="Thêm mới" class="btn btn-primary">Cập nhật</button>
      </form>
    </div>
  </div>
</div>
@endsection