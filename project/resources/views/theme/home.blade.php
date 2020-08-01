@extends('layouts.theme')

@section('content')

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="3000" data-pause="false"">
  <ol class=" carousel-indicators">
  @foreach ($banners as $b)
  <li data-target="#carouselExampleIndicators" data-slide-to="{{$loop->index}}" @if ($loop->first) class="active"
    @endif>
  </li>
  @endforeach
  </ol>
  <div class="carousel-inner">
    @foreach ($banners as $b)
    <div class="carousel-item @if ($loop->first) active @endif">
      <img src="{{asset("image/banner/$b->thumbnail")}}" class="d-block w-100">
    </div>
    @endforeach
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Trước</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Sau</span>
  </a>
</div>

<div class="container">
  <div id="content" class="space-top-none">
    <div class="main-content">
      <div class="space60">&nbsp;</div>
      <div class="row">
        <div class="col-sm-12">
          <div class="filter">
            <h6>Chọn mức giá:</h6>
            <div class="space20">&nbsp;</div>
            <a href="{{route('filter', '<1m')}}">Dưới 1 triệu</a>&nbsp;
            <a href="{{route('filter', '1m-3m')}}">Từ 1-3 triệu</a>&nbsp;
            <a href="{{route('filter', '3m-5m')}}">Từ 3-5 triệu</a>&nbsp;
            <a href="{{route('filter', '>5m')}}">Trên 5 triệu</a>
          </div>

        </div>
      </div>
      <div class="space60">&nbsp;</div>
      <div class="row">
        <div class="col-sm-12">
          <div class="beta-products-list">
            <h3 class="text-center">Sản phẩm mới</h3>
            <div class="beta-products-details">
              <div class="space40">&nbsp;</div>
            </div>

            <div class="row d-flex justify-content-center">
              <div class="list">
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
                      <div class="space40">&nbsp;</div>
                    </div>
                  </div>
                </div>
                @endforeach
              </div>
            </div>
          </div>

          <div class="space80">&nbsp;</div>

          <div class="beta-products-list">
            <h3 class="text-center">Có thể bạn quan tâm</h3>
            <div class="beta-products-details">
              <div class="space40">&nbsp;</div>
            </div>
            <div class="row">
              <div class="owl-carousel owl-theme">
                @foreach ($randoms as $r)
                <div class="item">
                  <div class="single-item">
                    <div class="single-item-header">
                      <a href="{{url("product/$r->id")}}">
                        <img src="{{asset("image/product/$r->thumbnail")}}">
                      </a>
                    </div>
                    <div class="single-item-body">
                      <p class="single-item-title"><b>{{$r->name}}</b></p>
                      <p class="single-item-price">
                        <span class="color-gray">{{number_format($r->price, 0, '', '.')}}đ</span>
                      </p>
                    </div>
                    <div class="space20">&nbsp;</div>
                    <div class="single-item-caption">
                      <p class="single-item-title"><b style="color: green">{{$r->status}}</b></p>
                      <a class="add-to-cart pull-left" href="{{route('cart.add', $r->id)}}">
                        <i class="fas fa-cart-plus"></i>
                      </a>
                      <a class="beta-btn primary" href="{{url("product/$r->id")}}">
                        Chi tiết
                        <i class="fa fa-chevron-right"></i>
                      </a>
                      <div class="space80">&nbsp;</div>
                    </div>
                  </div>
                </div>
                @endforeach
              </div>{{-- end owl carousel --}}
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection