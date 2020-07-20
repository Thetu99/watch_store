@extends('layouts.theme')

@section('content')
<div class="container">
  <div id="content" class="space-top-none">
    <div class="main-content">
      <div class="space60">&nbsp;</div>
      <div class="row">
        <div class="col-sm-12">
          <div class="beta-products-list">
            <h4>Tìm kiếm</h4>
            <div class="beta-products-details">
              <p class="pull-left"> Tìm thấy <b style="color: red">{{count($products)}}</b> sản phẩm </p>
              <div class="clearfix"></div>
            </div>

            <div class="row">
              @php
              $i=0;
              @endphp
              @foreach ($products as $p)
              @php
              $i++;
              @endphp
              <div class="col-sm-3">
                <div class="single-item">
                  <div class="single-item-header">
                    <a href="{{url("product/$p->id")}}">
                      <img src="{{asset("image/product/$p->thumbnail")}}" />
                    </a>
                  </div>
                  <div class="single-item-body">
                    <p class="single-item-title"><b>{{$p->name}}</b></p>
                    <p class="single-item-price">
                      <span class="color-gray">{{number_format($p->price, 0, '', '.')}}đ</span>
                    </p>
                  </div>
                  <div class="single-item-caption">
                    <a class="add-to-cart pull-left" href="{{route('cart.add', $p->id)}}"><i
                        class="fa fa-shopping-cart"></i></a>
                    <a class="beta-btn primary" href="{{url("product/$p->id")}}">Chi tiết<i
                        class="fa fa-chevron-right"></i></a>
                    <div class="clearfix"></div>
                  </div>
                </div>
              </div>
              @if ($i==4)
              <div class="space40">&nbsp;</div>
              @endif
              @endforeach
            </div>
          </div>
          <!-- .beta-products-list -->
        </div>
      </div>
    </div>
  </div>
  @endsection