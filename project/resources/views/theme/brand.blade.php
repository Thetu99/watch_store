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
              <li><h6>Mức giá</h6></li>
              <li>
                <a href="{{route('filter', '<1m')}}">Dưới 1 triệu</a>
              </li>
              <li>
                <a href="{{route('filter', '1m-3m')}}">Từ 1-3 triệu</a>
              </li>
              <li>
                <a href="{{route('filter', '3m-5m')}}">Từ 3-5 triệu</a>
              </li>
              <li>
                <a href="{{route('filter', '>5m')}}">Trên 5 triệu</a>
              </li>
            </ul>
          </div>

        </div>
        <div class="col-sm-9">
          <div class="beta-products-list">
            <h4>Sản phẩm mới</h4>
            <div class="beta-products-details">
              <div class="clearfix"></div>
            </div>

            <div class="row">
              @foreach ($news as $n)
              <div class="col-sm-4">
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
                    <p class="single-item-title"><b style="color: green">{{$n->status}}</b></p>
                  </div>
                  <div class="single-item-caption">
                    <a class="add-to-cart pull-left" href="{{route('cart.add', $n->id)}}"><i
                        class="fa fa-shopping-cart"></i></a>
                    <a class="beta-btn primary" href="{{route('product.show', $n->id)}}">Chi tiết <i
                        class="fa fa-chevron-right"></i></a>
                    <div class="clearfix"></div>
                  </div>
                </div>
              </div>
              @endforeach
            </div>
          </div> <!-- .beta-products-list -->

          <div class="space50">&nbsp;</div>

          <div class="beta-products-list">
            <h4>Sản phẩm nổi bật</h4>
            <div class="beta-products-details">
              <div class="clearfix"></div>
            </div>

            <div class="row">
              @foreach ($randoms as $r)
              <div class="col-sm-4">
                <div class="single-item">
                  <div class="single-item-header">
                    <a href="{{route('product.show', $r->id)}}"><img
                        src="{{asset("image/product/{$r->thumbnail}")}}"></a>
                  </div>
                  <div class="single-item-body">
                    <p class="single-item-title"><b>{{$r->name}}</b></p>
                    <p class="single-item-price">
                      <span class="color-gray">{{number_format($r->price,0,'','.')}}đ</span>
                    </p>
                    <p class="single-item-title"><b style="color: green">{{$r->status}}</b></p>
                  </div>
                  <div class="single-item-caption">
                    <a class="add-to-cart pull-left" href="{{route('cart.add', $r->id)}}"><i
                        class="fa fa-shopping-cart"></i></a>
                    <a class="beta-btn primary" href="{{route('product.show', $r->id)}}">Chi tiết <i
                        class="fa fa-chevron-right"></i></a>
                    <div class="clearfix"></div>
                  </div>
                </div>
              </div>
              @endforeach
            </div>
            <div class="space40">&nbsp;</div>

          </div> <!-- .beta-products-list -->
        </div>
      </div> <!-- end section with sidebar and main content -->


    </div> <!-- .main-content -->
  </div> <!-- #content -->
</div> <!-- .container -->
@endsection