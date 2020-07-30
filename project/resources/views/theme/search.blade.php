@extends('layouts.theme')

@section('content')
<div class="container">
  <div id="content" class="space-top-none">
    <div class="main-content">
      <div class="space60">&nbsp;</div>
      <div class="row">
        <div class="beta-products-list">
          <h6 class="inner-title">Tìm kiếm</h6>
          <div class="space20">&nbsp;</div>
          <div class="beta-products-details">
            <p class="pull-left"> Tìm thấy <b style="color: red">{{$products->total()}}</b> sản phẩm </p>
            <div class="clearfix"></div>
          </div>

          <div class="space80">&nbsp;</div>

          <div class="row">
            @foreach ($products as $p)
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
                <div class="space20">&nbsp;</div>
                <div class="single-item-caption">
                  <p class="single-item-title"><b style="color: green">{{$p->status}}</b></p>
                  <a class="add-to-cart pull-left" href="{{route('cart.add', $p->id)}}">
                    <i class="fas fa-cart-plus"></i>
                  </a>
                  <a class="beta-btn primary" href="{{url("product/$p->id")}}">Chi tiết
                    <i class="fa fa-chevron-right"></i>
                  </a>
                  <div class="space80">&nbsp;</div>
                </div>
              </div>
            </div>
            @endforeach
          </div>{{-- end row --}}
          <div class="text-center">{{$products->links()}}</div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection