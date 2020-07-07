@extends('layouts.theme')

@section('content')
<div class="rev-slider">
  <div class="fullwidthbanner-container">
    <div class="fullwidthbanner">
      <div class="bannercontainer">
        <div class="banner">
          <ul>
            <!-- THE FIRST SLIDE -->
            <li data-transition="boxfade" data-slotamount="20" class="active-revslide" style="
                width: 100%;
                height: 100%;
                overflow: hidden;
                z-index: 18;
                visibility: hidden;
                opacity: 0;
              ">
              <div class="slotholder" style="width: 100%; height: 100%;" data-duration="undefined"
                data-zoomstart="undefined" data-zoomend="undefined" data-rotationstart="undefined"
                data-rotationend="undefined" data-ease="undefined" data-bgpositionend="undefined"
                data-bgposition="undefined" data-kenburns="undefined" data-easeme="undefined" data-bgfit="undefined"
                data-bgfitend="undefined" data-owidth="undefined" data-oheight="undefined">
                <div class="tp-bgimg defaultimg" data-lazyload="undefined" data-bgfit="cover"
                  data-bgposition="center center" data-bgrepeat="no-repeat" data-lazydone="undefined"
                  src="{{asset('assets/dest/images/thumbs/1.jpg')}}"
                  data-src="{{asset('assets/dest/images/thumbs/1.jpg')}}" style="
                    background-color: rgba(0, 0, 0, 0);
                    background-repeat: no-repeat;
                    background-image: url('{{asset('assets/dest/images/thumbs/1.jpg')}}');
                    background-size: cover;
                    background-position: center center;
                    width: 100%;
                    height: 100%;
                    opacity: 1;
                    visibility: inherit;
                  "></div>
              </div>
            </li>
            <li data-transition="boxfade" data-slotamount="20" class="active-revslide" style="
                width: 100%;
                height: 100%;
                overflow: hidden;
                z-index: 18;
                visibility: hidden;
                opacity: 0;
              ">
              <div class="slotholder" style="width: 100%; height: 100%;" data-duration="undefined"
                data-zoomstart="undefined" data-zoomend="undefined" data-rotationstart="undefined"
                data-rotationend="undefined" data-ease="undefined" data-bgpositionend="undefined"
                data-bgposition="undefined" data-kenburns="undefined" data-easeme="undefined" data-bgfit="undefined"
                data-bgfitend="undefined" data-owidth="undefined" data-oheight="undefined">
                <div class="tp-bgimg defaultimg" data-lazyload="undefined" data-bgfit="cover"
                  data-bgposition="center center" data-bgrepeat="no-repeat" data-lazydone="undefined"
                  src="{{asset('assets/dest/images/thumbs/1.jpg')}}"
                  data-src="{{asset('assets/dest/images/thumbs/1.jpg')}}" style="
                    background-color: rgba(0, 0, 0, 0);
                    background-repeat: no-repeat;
                    background-image: url('{{asset('assets/dest/images/thumbs/1.jpg')}}');
                    background-size: cover;
                    background-position: center center;
                    width: 100%;
                    height: 100%;
                    opacity: 1;
                    visibility: inherit;
                  "></div>
              </div>
            </li>

            <li data-transition="boxfade" data-slotamount="20" class="active-revslide" style="
                width: 100%;
                height: 100%;
                overflow: hidden;
                z-index: 18;
                visibility: hidden;
                opacity: 0;
              ">
              <div class="slotholder" style="width: 100%; height: 100%;" data-duration="undefined"
                data-zoomstart="undefined" data-zoomend="undefined" data-rotationstart="undefined"
                data-rotationend="undefined" data-ease="undefined" data-bgpositionend="undefined"
                data-bgposition="undefined" data-kenburns="undefined" data-easeme="undefined" data-bgfit="undefined"
                data-bgfitend="undefined" data-owidth="undefined" data-oheight="undefined">
                <div class="tp-bgimg defaultimg" data-lazyload="undefined" data-bgfit="cover"
                  data-bgposition="center center" data-bgrepeat="no-repeat" data-lazydone="undefined"
                  src="{{asset('assets/dest/images/thumbs/1.jpg')}}"
                  data-src="{{asset('assets/dest/images/thumbs/1.jpg')}}" style="
                    background-color: rgba(0, 0, 0, 0);
                    background-repeat: no-repeat;
                    background-image: url('{{asset('assets/dest/images/thumbs/1.jpg')}}');
                    background-size: cover;
                    background-position: center center;
                    width: 100%;
                    height: 100%;
                    opacity: 1;
                    visibility: inherit;
                  "></div>
              </div>
            </li>

            <li data-transition="boxfade" data-slotamount="20" class="active-revslide current-sr-slide-visible" style="
                width: 100%;
                height: 100%;
                overflow: hidden;
                visibility: inherit;
                opacity: 1;
                z-index: 20;
              ">
              <div class="slotholder" style="width: 100%; height: 100%;" data-duration="undefined"
                data-zoomstart="undefined" data-zoomend="undefined" data-rotationstart="undefined"
                data-rotationend="undefined" data-ease="undefined" data-bgpositionend="undefined"
                data-bgposition="undefined" data-kenburns="undefined" data-easeme="undefined" data-bgfit="undefined"
                data-bgfitend="undefined" data-owidth="undefined" data-oheight="undefined">
                <div class="tp-bgimg defaultimg" data-lazyload="undefined" data-bgfit="cover"
                  data-bgposition="center center" data-bgrepeat="no-repeat" data-lazydone="undefined"
                  src="{{asset('assets/dest/images/thumbs/1.jpg')}}"
                  data-src="{{asset('assets/dest/images/thumbs/1.jpg')}}" style="
                    background-color: rgba(0, 0, 0, 0);
                    background-repeat: no-repeat;
                    background-image: url('{{asset('assets/dest/images/thumbs/1.jpg')}}');
                    background-size: cover;
                    background-position: center center;
                    width: 100%;
                    height: 100%;
                    opacity: 1;
                    visibility: inherit;
                  "></div>
              </div>
            </li>
          </ul>
        </div>
      </div>

      <div class="tp-bannertimer"></div>
    </div>
  </div>
  <!--slider-->
</div>
<div class="container">
  <div id="content" class="space-top-none">
    <div class="main-content">
      <div class="space60">&nbsp;</div>
      <div class="row">
        <div class="col-sm-12">
          <div class="beta-products-list">
            <h4>Sản phẩm mới</h4>
            <div class="beta-products-details">
              {{-- <p class="pull-left">438 styles found</p> --}}
              <div class="clearfix"></div>
            </div>

            <div class="row">
              @foreach ($products as $p)
              <div class="col-sm-3">
                <div class="single-item">
                  <div class="single-item-header">
                  <a href="{{url("product/$p->id")}}"><img src="{{asset("$p->thumbnail")}}" alt="" /></a>
                  </div>
                  <div class="single-item-body">
                    <p class="single-item-title">{{$p->name}}</p>
                    <p class="single-item-price">
                      <span>{{number_format($p->price, 0, '', '.')}}đ</span>
                    </p>
                  </div>
                  <div class="single-item-caption">
                    <a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>
                    <a class="beta-btn primary" href="product.html">Chi tiết<i class="fa fa-chevron-right"></i></a>
                    <div class="clearfix"></div>
                  </div>
                </div>
              </div>
              @endforeach
            </div>
          </div>
          <!-- .beta-products-list -->

          <div class="space50">&nbsp;</div>

          <div class="beta-products-list">
            <h4>Sản phẩm bán chạy</h4>
            <div class="beta-products-details">
              {{-- <p class="pull-left">438 styles found</p> --}}
              <div class="clearfix"></div>
            </div>
            <div class="row">            
              @foreach ($random_1 as $r)
              <div class="col-sm-3">
                <div class="single-item">
                  <div class="single-item-header">
                  <a href="{{url("product/$r->id")}}"><img src="{{asset($r->thumbnail)}}" alt="" /></a>
                  </div>
                  <div class="single-item-body">
                    <p class="single-item-title">{{$r->name}}</p>
                    <p class="single-item-price">
                      <span>{{number_format($r->price, 0, '', '.')}}đ</span>
                    </p>
                  </div>
                  <div class="single-item-caption">
                    <a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>
                    <a class="beta-btn primary" href="product.html">Chi tiết<i class="fa fa-chevron-right"></i></a>
                    <div class="clearfix"></div>
                  </div>
                </div>
              </div>
              @endforeach
            </div>

            <div class="space40">&nbsp;</div>

            <div class="row">
              @foreach ($random_2 as $r)
              <div class="col-sm-3">
                <div class="single-item">
                  <div class="single-item-header">
                  <a href="{{url("product/$r->id")}}"><img src="{{asset($r->thumbnail)}}" alt="" /></a>
                  </div>
                  <div class="single-item-body">
                    <p class="single-item-title">{{$r->name}}</p>
                    <p class="single-item-price">
                      <span>{{number_format($r->price, 0, '', '.')}}đ</span>
                    </p>
                  </div>
                  <div class="single-item-caption">
                    <a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>
                    <a class="beta-btn primary" href="product.html">Chi tiết<i class="fa fa-chevron-right"></i></a>
                    <div class="clearfix"></div>
                  </div>
                </div>
              </div>
              @endforeach
            </div>
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