@extends('layouts.theme')

@section('content')
<div class="inner-header">
  <div class="container">
    <div class="pull-left">
      <h6 class="inner-title">Đặt hàng</h6>
    </div>
    <div class="pull-right">
      <div class="beta-breadcrumb">
        <a href="{{url('/')}}" class="home fa fa-home"> Trang chủ</a> / <span>Đặt hàng</span>
      </div>
    </div>
    <div class="clearfix"></div>
  </div>
</div>

<div class="container">
  <div id="content">
    <div class="row">
      <div class="col-sm-12">
        <div id="inform">
          <h6>Bạn đã đặt hàng thành công</h6>
          <hr>
          <a href="{{url('/')}}">Quay lại</a>
        </div>
      </div>
    </div>
  </div> <!-- #content -->
</div> <!-- .container -->

@endsection