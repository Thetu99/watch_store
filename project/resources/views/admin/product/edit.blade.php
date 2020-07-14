@extends('layouts.admin')
@section('content')
<div id="content" class="container-fluid">
  <div class="card">
    <div class="card-header font-weight-bold">
      Thêm sản phẩm
    </div>
    <div class="card-body">
      <form action="{{route('update_product', $product->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
          <label for="name">Tên sản phẩm</label>
          <input class="form-control" type="text" name="name" id="name" value="{{$product->name}}">
          @error('name')
          <small class="text-danger">{{$message}}</small>
          @enderror
        </div>
        <div class="form-group">
          <label for="brand">Thương hiệu</label>
          <select name="brand" id="brand" class="form-control">
            @php
            $brands=['Tissot', 'Casio', 'Orient', 'Fossil', 'Obaku'];
            @endphp
            @foreach ($brands as $b)
            <option value="{{$b}}" @if ($b==$product->brand)
              {{'selected'}}
              @endif>{{$b}}
            </option>
            @endforeach
          </select>
          @error('brand')
          <small class="text-danger">{{$message}}</small>
          @enderror
        </div>
        <div class="form-group">
          <label for="content">Mô tả</label>
          <textarea class="form-control" name="content" id="content">{{$product->content}}</textarea>
          @error('content')
          <small class="text-danger">{{$message}}</small>
          @enderror
        </div>
        <div class="form-group">
          <label for="price">Giá tiền</label>
          <input class="form-control" type="text" name="price" id="price" value="{{$product->price}}">
          @error('price')
          <small class="text-danger">{{$message}}</small>
          @enderror
        </div>

        <button type="submit" name="btn-add" value="Thêm mới" class="btn btn-primary">Cập nhật</button>
      </form>
    </div>
  </div>
</div>
@endsection