@extends('layouts.admin')
@section('content')
<div id="content" class="container-fluid">
  <div class="card">
    <div class="card-header font-weight-bold">
      Thêm sản phẩm
    </div>
    <div class="card-body">

      {{-- {!! Form::open(['url'=>'admin/product/store', 'method'=>'post', 'files'=> true, 'autocomplete'=>'off']) !!}

      <div class="form-group">
        {!! Form::label('name', 'Tên sản phẩm') !!}
        {!! Form::text('name', '', ['class'=>'form-control', 'required']) !!}
      </div>

      <div class="form-group">
        {!! Form::label('', 'Thương hiệu') !!}<br>
        {!! Form::radio('brand', 'Orient', '', ['id'=>'Orient', 'required']) !!}
        {!! Form::label('Orient', 'Orient') !!} &nbsp;
        {!! Form::radio('brand', 'Casio', '', ['id'=>'Casio', 'required']) !!}
        {!! Form::label('Casio', 'Casio') !!} &nbsp;
        {!! Form::radio('brand', 'Obaku', '', ['id'=>'Obaku', 'required']) !!}
        {!! Form::label('Obaku', 'Obaku') !!} &nbsp;
        {!! Form::radio('brand', 'Tissot', '', ['id'=>'Tissot', 'required']) !!}
        {!! Form::label('Tissot', 'Tissot') !!} &nbsp;
        {!! Form::radio('brand', 'Fossil', '', ['id'=>'Fossil', 'required']) !!}
        {!! Form::label('Fossil', 'Fossil') !!}
      </div>

      <div class="form-group">
        {!! Form::label('price', 'Giá tiền') !!}
        {!! Form::text('price', '', ['class'=>'form-control', 'required']) !!}
      </div>

      <div class="form-group">
        {!! Form::label('Mô tả') !!}<br>
        {!! Form::textarea('content', '', ['class'=>'form-control']) !!}
      </div>
      @error('content')
      <small class="text-danger">{{$message}}</small>
      @enderror

      <div class="form-group">
        {!! Form::label('Ảnh') !!}<br>
        {!! Form::file('thumbnail', ['class'=>'form-control-file', 'type'=>'file']) !!}
      </div>      

      {!! Form::submit('Thêm mới', ['class'=> 'btn btn-primary']) !!}

      {!! Form::close() !!} --}}
      <form action="{{url('admin/product/store')}}" method="POST" enctype="multipart/form-data" autocomplete="off">
      @csrf
      <div class="form-group">
        <label for="name">Tên sản phẩm</label>
        <input class="form-control" type="text" name="name" id="name" required>
      </div>

      <div class="form-group">
        <label for="brand">Thương hiệu</label>
        <select name="brand" id="brand" class="form-control" required>
          <option value="" disabled selected>--Chọn--</option>
          @foreach ($brands as $b)
          <option value="{{$b->name}}">
            {{$b->name}}
          </option>
          @endforeach
        </select>
      </div>
      
      <div class="form-group">
        <label for="price">Giá tiền</label>
        <input class="form-control" type="text" name="price" id="price" required>
      </div>

      <div class="form-group">
        <label for="content">Mô tả</label>
        <textarea class="form-control" name="content" id="content" rows="5"></textarea>
      </div>

      <div class="form-group">
        <label for="thumbnail">Ảnh</label>
        <input class="form-control-file" type="file" name="thumbnail" id="thumbnail" required>
      </div>
      
      <button type="submit" name="btn-add" value="Thêm mới" class="btn btn-primary">Thêm mới</button>
      </form>
    </div>
  </div>
</div>
@endsection