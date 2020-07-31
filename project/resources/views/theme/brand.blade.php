@extends('layouts.theme')

@section('content')
<div class="inner-header">
  <div class="container">
    <div class="pull-left">
      <h6 class="inner-title">Thương hiệu @foreach ($brands as $b)
        {{$b->name}}
        @endforeach</h6>
    </div>
    <div class="pull-right">
      <div class="beta-breadcrumb font-large">
        <a href="{{url('home')}}" class="home fa fa-home"> Trang chủ</a> / <span>Thương hiệu</span>
      </div>
    </div>
    <div class="clearfix"></div>
  </div>
</div>
<div class="container">
  <div id="content" class="space-top-none">
    <div class="main-content">
      <div class="space60">&nbsp;</div>
      <div class="row">
        <div class="col-sm-3">
          <div class="filter">
            <ul class="aside-menu">
              <li>
                <h6>Mức giá</h6>
              </li>
              @php
              $price = request()->price;
              $status = request()->status;
              @endphp
              <li>
                <input type="radio" name="filter-price" @if (request()->price=='all') checked @endif>&nbsp;
                <a class="filter" href="{{url("brand/$b->name/all/$status")}}">Tất cả</a>
              </li>
              <li>
                <input type="radio" name="filter-price" @if (request()->price=='<1') checked @endif>&nbsp;
                  <a class="filter" href="{{url("brand/$b->name/<1/$status")}}">Dưới 1 triệu</a>
              </li>
              <li>
                <input type="radio" name="filter-price" @if (request()->price=='1-3') checked @endif>&nbsp;
                <a class="filter" href="{{url("brand/$b->name/1-3/$status")}}">Từ 1-3 triệu</a>
              </li>
              <li>
                <input type="radio" name="filter-price" @if (request()->price=='3-5') checked @endif>&nbsp;
                <a class="filter" href="{{url("brand/$b->name/3-5/$status")}}">Từ 3-5 triệu</a>
              </li>
              <li>
                <input type="radio" name="filter-price" @if (request()->price=='>5') checked @endif>&nbsp;
                <a class="filter" href="{{url("brand/$b->name/>5/$status")}}">Trên 5 triệu</a>
              </li>
            </ul>
          </div>
          <div class="filter">
            <ul class="aside-menu">
              <li>
                <h6>Tình trạng</h6>
              </li>
              <li>
                <input type="radio" name="filter-status" @if (request()->status=='all') checked @endif>&nbsp;
                <a class="filter" href="{{url("brand/$b->name/$price/all")}}">Tất cả</a>
              </li>
              <li>
                <input type="radio" name="filter-status" @if (request()->status=='yes') checked @endif>&nbsp;
                <a class="filter" href="{{url("brand/$b->name/$price/yes")}}">Còn hàng</a>
              </li>
              <li>
                <input type="radio" name="filter-status" @if (request()->status=='no') checked @endif>&nbsp;
                <a class="filter" href="{{url("brand/$b->name/$price/no")}}">Hết hàng</a>
              </li>
            </ul>
          </div>
        </div>

        <div class="col-sm-9">
          <div class="beta-products-list">
            <div class="row">
              @if ($news->total()>0)
              @foreach ($news as $n)
              <div class="col-sm-3">
                <div class="single-item">
                  <div class="single-item-header">
                    <a href="{{route('product.show', $n->id)}}"><img src="{{asset("image/product/{$n->thumbnail}")}}"
                        alt=""></a>
                  </div>
                  <div class="single-item-body">
                    <p class="single-item-title"><b>{{$n->name}}</b></p>
                    <p class="single-item-price">
                      <span class="color-gray">{{number_format($n->price,0,'','.')}}đ</span>
                    </p>
                  </div>
                  <div class="space20">&nbsp;</div>

                  <div class="single-item-caption">
                    <p class="single-item-title"><b style="color: green">{{$n->status}}</b></p>
                    <a class="add-to-cart pull-left" href="{{route('cart.add', $n->id)}}">
                      <i class="fas fa-cart-plus"></i>
                    </a>
                    <a class="beta-btn primary" href="{{route('product.show', $n->id)}}">
                      Chi tiết
                      <i class="fa fa-chevron-right"></i>
                    </a>
                    <div class="space80">&nbsp;</div>
                  </div>
                </div>
              </div>
              @endforeach

              @else
              <div class="space60">&nbsp;</div>
              <div class="col-sm-12 filter">
                <p>Không tìm thấy sản phẩm</p>
              </div>
              <div class="space80">&nbsp;</div>
              @endif
            </div>
            <div class="text-center">{{$news->links()}}</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection