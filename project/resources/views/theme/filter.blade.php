@extends('layouts.theme')

@section('content')
<div class="container">
  <div id="content" class="space-top-none">
    <div class="main-content">
      <div class="space60">&nbsp;</div>
      <div class="row">
        <div class="col-sm-12">
          <div class="filter">
            <h6>Chọn mức giá:</h6>
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
            <h4>@foreach ($title as $t)
              {{$t}}
              @endforeach</h4>
            <div class="beta-products-details">
              {{-- <p class="pull-left">438 styles found</p> --}}
              <div class="clearfix"></div>
            </div>

            <div class="row">
              @php
              $i=0;
              @endphp
              @if ($filter->total()>0)
              @foreach ($filter as $f)
              @php
              $i++;
              @endphp
              <div class="col-sm-3">
                <div class="single-item">
                  <div class="single-item-header">
                    <a href="{{url("product/$f->id")}}">
                      <img src="{{asset("image/product/$f->thumbnail")}}" />
                    </a>
                  </div>
                  <div class="single-item-body">
                    <p class="single-item-title"><b>{{$f->name}}</b></p>
                    <p class="single-item-price">
                      <span class="color-gray">{{number_format($f->price, 0, '', '.')}}đ</span>
                    </p>
                  </div>
                  <div class="single-item-caption">
                    <a class="add-to-cart pull-left" href="{{route('cart.add', $f->id)}}"><i
                        class="fa fa-shopping-cart"></i></a>
                    <a class="beta-btn primary" href="{{url("product/$f->id")}}">Chi tiết<i
                        class="fa fa-chevron-right"></i></a>
                    <div class="clearfix"></div>
                  </div>
                </div>
              </div>
              @if ($i%4==0)
              <div class="space40">&nbsp;</div>
              @endif
              @endforeach
              @else
              <div class="col-sm-12">
                <div class="space50">&nbsp;</div>
                <div class="filter">
                  <p>Không tìm thấy sản phẩm</p>
                </div>                
              </div>              
              @endif
            </div>
          </div>
          <!-- .beta-products-list -->
          <div class="space50">&nbsp;</div>
        </div>
        <!-- .beta-products-list -->
      </div>
    </div>
    <!-- end section with sidebar and main content -->
  </div>
  <!-- .main-content -->
</div>
<!-- #content -->
</div>
@endsection