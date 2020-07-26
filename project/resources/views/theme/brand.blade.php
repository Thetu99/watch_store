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
              <li><a href="{{route('filter', '<1m')}}">Dưới 1 triệu</a></li>
              <li><a href="{{route('filter', '1m-3m')}}">Từ 1-3 triệu</a></li>
              <li><a href="{{route('filter', '3m-5m')}}">Từ 3-5 triệu</a> </li>
              <li><a href="{{route('filter', '>5m')}}">Trên 5 triệu</a></li>
            </ul>
          </div>
        </div>

        <div class="col-sm-9">
          <div class="beta-products-list">

            <div class="clearfix"></div>

            <div class="row">
              @php
              $i=0;
              @endphp
              @foreach ($news as $n)
              @php
              $i++;
              @endphp
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
                  </div>
                  <div class="space20">&nbsp;</div>
                  <div class="single-item-caption">
                    <p class="single-item-title"><b style="color: green">{{$n->status}}</b></p>
                    <a class="add-to-cart pull-left" href="{{route('cart.add', $n->id)}}"><i
                        class="fa fa-shopping-cart"></i></a>
                    <a class="beta-btn primary" href="{{route('product.show', $n->id)}}">Chi tiết <i
                        class="fa fa-chevron-right"></i></a>
                    <div class="clearfix"></div>
                  </div>
                </div>
              </div>
              @if ($i%3==0)
              <div class="space80">&nbsp;</div>
              @endif
              @endforeach
            </div>
            <div class="text-center">{{$news->links()}}</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>>
@endsection