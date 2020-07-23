@extends('layouts.admin')
@section('content')
<div id="content" class="container-fluid">
  <div class="card">
    <div class="card-header font-weight-bold">
      Cập nhật sản phẩm
    </div>
    <div class="card-body">

      {{-- {!! Form::open(['route'=> ['update_product', $product->id], 'method'=>'post', 'files'=> true,
      'autocomplete'=>'off']) !!}

      <div class="form-group">
        {!! Form::label('name', 'Tên sản phẩm') !!}
        {!! Form::text('name', $product->name, ['class'=>'form-control', 'required']) !!}
      </div>

      <div class="form-group">
        {!! Form::label('', 'Thương hiệu') !!}<br>

        {!! Form::select('brand', $brand, isset($product->brand) ? $product->brand : null, ['class'=>'form-control']) !!}
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

      <div class="form-group">
        {!! Form::label('', 'Tình trạng') !!}<br>

        {!! Form::radio('status', 'Còn hàng', isset($product->status) ? $product->status : null, ['id'=>'Còn hàng',
        'required']) !!}
        {!! Form::label('Còn hàng', 'Còn hàng') !!} &nbsp;

        {!! Form::radio('status', 'Hết hàng', isset($product->status) ? $product->status : null, ['id'=>'Hết hàng',
        'required']) !!}
        {!! Form::label('Hết hàng', 'Hết hàng') !!} &nbsp;
      </div>

      {!! Form::submit('Cập nhật', ['class'=> 'btn btn-primary']) !!}

      {!! Form::close() !!} --}}
      <form action="{{route('update_product', $product->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
          <label for="name">Tên sản phẩm</label>
          <input class="form-control" type="text" name="name" id="name" value="{{$product->name}}" required>
        </div>

        <div class="form-group">
          <label for="brand">Thương hiệu</label>
          <select name="brand" id="brand" class="form-control">
            @foreach ($brands as $b)
            <option value="{{$b->name}}" @if ($b->name==$product->brand)
              {{'selected'}}
              @endif>{{$b->name}}
            </option>
            @endforeach
          </select>
        </div>

        <div class="form-group">
          <label for="price">Giá tiền</label>
          <input class="form-control" type="text" name="price" id="price" value="{{$product->price}}" required>
        </div>

        <div class="form-group">
          <label for="content">Mô tả</label>
          <textarea class="form-control" name="content" id="content" required >{{$product->content}}</textarea>
        </div>

        <div class="form-group">
          <label>Tình trạng</label><br>
          
          <input type="radio" name="status" id="conhang" value="Còn hàng" @if ($product->status=='Còn hàng')
          checked
          @endif>
          <label for="conhang">Còn hàng</label>&nbsp;

          <input type="radio" name="status" id="hethang" value="Hết hàng" @if ($product->status=='Hết hàng')
          checked
          @endif>
          <label for="hethang">Hết hàng</label>
        </div>

        <button type="submit" name="btn-add" value="Thêm mới" class="btn btn-primary">Cập nhật</button>
      </form>
    </div>
  </div>
</div>
@endsection