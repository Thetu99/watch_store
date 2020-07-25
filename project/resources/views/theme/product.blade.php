@extends('layouts.theme')

@section('content')
<div class="inner-header">
  <div class="container">
    <div class="pull-left">
      <h6 class="inner-title">Chi tiết sản phẩm</h6>
    </div>
    <div class="pull-right">
      <div class="beta-breadcrumb font-large">
        <a href="{{url('/')}}" class="home fa fa-home"> Trang chủ</a> / <span>Sản phẩm</span>
      </div>
    </div>
    <div class="clearfix"></div>
  </div>
</div>

<div class="container">
  <div id="content">
    <div class="row">
      <div class="col-sm-9">

        <div class="row">
          <div class="col-sm-4">
            <img src="{{asset("image/product/$products->thumbnail")}}">
          </div>
          <div class="col-sm-8">
            <div class="single-item-body">
              <p class="single-item-title"><b>{{$products->name}}</b></p>
              <p class="single-item-price">
                <span class="color-gray">{{number_format($products->price,0,'','.')}}đ</span>
              </p>
            </div>

            <div class="clearfix"></div>
            <div class="space20">&nbsp;</div>

            <div class="single-item">
              <p class="single-item-title"><b style="color: green">{{$products->status}}</b></p>
              <a class="add-to-cart pull-left" href="{{route('cart.add', $products->id)}}">
                <i class="fa fa-shopping-cart"></i>
                <a class="beta-btn primary" href="{{route('cart.add', $products->id)}}">Cho vào giỏ hàng</a>
              </a>

            </div>
            <div class="space20">&nbsp;</div>


            <div class="clearfix"></div>
          </div>
        </div>

        <div class="space40">&nbsp;</div>
        <div class="woocommerce-tabs">
          <ul class="tabs">
            <li><a href="#tab-description">Mô tả</a></li>
            <li><a href="#tab-reviews">Đánh giá ({{$comments->total()}})</a></li>
          </ul>

          <div class="panel" id="tab-description">
            {!!$products->content!!}
          </div>
          <div class="panel" id="tab-reviews">
            <form action="{{route('comment.store', $products->id)}}" method="post" autocomplete="off">
              @csrf
              <div class="comment">
                <label for="name">Tên:</label>
                <input type="text" name="name" id="name" required>

                <label for="content">Phản hồi:</label>
                <textarea name="content" required></textarea>
              </div>

              <button type="submit" value="Thêm mới" class="btn btn-primary">Gửi đánh giá</button>
            </form>

            <div class="space50">&nbsp;</div>

            <div class="comment">
              <ul>
                @foreach ($comments as $c)
                <li>
                  <img width="50px" src="{{asset("image/comment/guest-user.jpg")}}">
                  {{$c->name}}
                  <span>{{date("G:i j-n-Y", strtotime($c->created_at))}}</span>
                  <p>{{$c->content}}</p>
                </li>
                <div class="space50">&nbsp;</div>
                @endforeach
              </ul>
              {{$comments->links()}}
            </div>            
          </div>
        </div>

        <div class="space50">&nbsp;</div>

        <div class="beta-products-list">
          <h4>Các sản phẩm khác</h4>

          <div class="row">
            @foreach ($randoms as $r)
            <div class="col-sm-4">
              <div class="single-item">
                <div class="single-item-header">
                  <a href="{{route('product.show', $r->id)}}"><img src="{{asset("image/product/{$r->thumbnail}")}}"></a>
                </div>
                <div class="single-item-body">
                  <p class="single-item-title"><b>{{$r->name}}</b></p>
                  <p class="single-item-price">
                    <span class="color-gray">{{number_format($r->price,0,'','.')}}đ</span>
                  </p>
                </div>
                <div class="single-item-caption">
                  <a class="add-to-cart pull-left" href="{{route('cart.add', $r->id)}}"><i
                      class="fa fa-shopping-cart"></i></a>
                  <a class="beta-btn primary" href="{{route('product.show', $r->id)}}">Chi tiết<i
                      class="fa fa-chevron-right"></i></a>
                  <div class="clearfix"></div>
                </div>
              </div>
            </div>
            @endforeach

          </div>
        </div> <!-- .beta-products-list -->
      </div>
      <div class="col-sm-3 aside">
        <div class="widget">
          <h3 class="widget-title">Đồng hồ bán chạy nhất</h3>
          <div class="widget-body">
            <div class="beta-sales beta-lists">
              @foreach ($randoms as $r)
              <div class="media beta-sales-item">
                <a class="pull-left" href="{{route('product.show', $r->id)}}"><img
                    src="{{asset("image/product/{$r->thumbnail}")}}"></a>
                <div class="media-body">
                  <b>{{$r->name}}</b>
                  <span class="color-gray">{{number_format($r->price,0,'','.')}}đ</span>
                </div>
              </div>
              @endforeach
            </div>
          </div>
        </div> <!-- best sellers widget -->
        <div class="widget">
          <h3 class="widget-title">Đồng hồ mới</h3>
          <div class="widget-body">
            <div class="beta-sales beta-lists">
              @foreach ($news as $n)
              <div class="media beta-sales-item">
                <a class="pull-left" href="{{route('product.show', $n->id)}}"><img
                    src="{{asset("image/product/{$n->thumbnail}")}}"></a>
                <div class="media-body">
                  <b>{{$n->name}}</b>
                  <span class="color-gray">{{number_format($n->price,0,'','.')}}đ</span>
                </div>
              </div>
              @endforeach

            </div>
          </div>
        </div> <!-- best sellers widget -->
      </div>
    </div>
  </div> <!-- #content -->
</div> <!-- .container -->
<script type="text/javascript">
  $(function() {
      // this will get the full URL at the address bar
      var url = window.location.href;

      // passes on every "a" tag
      $(".main-menu a").each(function() {
          // checks if its the same on the address bar
          if (url == (this.href)) {
              $(this).closest("li").addClass("active");
            $(this).parents('li').addClass('parent-active');
          }
      });
  });

</script>
<script>
  jQuery(document).ready(function($) {
              'use strict';

// color box

//color
    jQuery('#style-selector').animate({
    left: '-213px'
  });

  jQuery('#style-selector a.close').click(function(e){
    e.preventDefault();
    var div = jQuery('#style-selector');
    if (div.css('left') === '-213px') {
      jQuery('#style-selector').animate({
        left: '0'
      });
      jQuery(this).removeClass('icon-angle-left');
      jQuery(this).addClass('icon-angle-right');
    } else {
      jQuery('#style-selector').animate({
        left: '-213px'
      });
      jQuery(this).removeClass('icon-angle-right');
      jQuery(this).addClass('icon-angle-left');
    }
  });
      });
</script>
@endsection