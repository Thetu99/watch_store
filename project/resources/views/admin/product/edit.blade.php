@extends('layouts.admin')
@section('content')
<div id="content" class="container-fluid">
  <div class="card">
    <div class="card-header font-weight-bold">
      Cập nhật sản phẩm
    </div>
    <div class="card-body">

      {!! Form::open(['route'=> ['update_product', $product->id], 'method'=>'post', 'files'=> true,
      'autocomplete'=>'off']) !!}

      <div class="form-group">
        {!! Form::label('name', 'Tên sản phẩm') !!}
        {!! Form::text('name', $product->name, ['class'=>'form-control', 'required']) !!}
      </div>

      <div class="form-group">
        {!! Form::label('', 'Thương hiệu') !!}<br>

        {!! Form::radio('brand', $product->brand, true, ['id'=> $product->brand, 'required']) !!}
        {!! Form::label($product->brand, $product->brand) !!} &nbsp;

        {!! Form::radio('brand', 'Orient', '', ['id'=>'orient', 'required']) !!}
        {!! Form::label('orient', 'Orient') !!} &nbsp;

        {!! Form::radio('brand', 'Casio', '', ['id'=>'casio', 'required']) !!}
        {!! Form::label('casio', 'Casio') !!} &nbsp;

        {!! Form::radio('brand', 'Obaku', '', ['id'=>'obaku', 'required']) !!}
        {!! Form::label('obaku', 'Obaku') !!} &nbsp;

        {!! Form::radio('brand', 'Tissot', '', ['id'=>'tissot', 'required']) !!}
        {!! Form::label('tissot', 'Tissot') !!} &nbsp;

        {!! Form::radio('brand', 'Fossil', '', ['id'=>'fossil', 'required']) !!}
        {!! Form::label('fossil', 'Fossil') !!}
      </div>

      <div class="form-group">
        {!! Form::label('price', 'Giá tiền') !!}
        {!! Form::text('price', $product->price, ['class'=>'form-control', 'required']) !!}
      </div>

      <div class="form-group">
        {!! Form::label('Mô tả') !!}<br>
        {!! Form::textarea('content', $product->content, ['class'=>'form-control']) !!}
      </div>
      @error('content')
      <small class="text-danger">{{$message}}</small>
      @enderror

      {!! Form::submit('Cập nhật', ['class'=> 'btn btn-primary']) !!}

      {!! Form::close() !!}
      {{-- <form action="{{route('update_product', $product->id)}}" method="POST" enctype="multipart/form-data">
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
      </form> --}}
    </div>
  </div>
</div>
@endsection