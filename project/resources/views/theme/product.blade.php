@extends('layouts.theme')

@section('content')
<div class="inner-header">
  <div class="container">
    <div class="pull-left">
      <h4 class="inner-title">Chi tiết sản phẩm</h4>
    </div>
    <div class="pull-right">
      <div class="beta-breadcrumb font-large">
        <a href="{{url('home')}}" class="home fa fa-home"> Trang chủ</a> / <span>Sản phẩm</span>
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
                <i class="fas fa-cart-plus"></i>
                <a class="beta-btn primary" href="{{route('cart.add', $products->id)}}">Cho vào giỏ hàng</a>
              </a>

            </div>
            <div class="space20">&nbsp;</div>


            <div class="clearfix"></div>
          </div>
        </div>

        <div class="space40">&nbsp;</div>

        <div class="card">
          <nav>
            <div class="nav nav-tabs">
              <a href="#tab-detail" class="nav-item nav-link active font-weight-bold" id="nav-detail"
                data-toggle="tab">Mô tả</a>
              <a href="#tab-comment" class="nav-item nav-link" id="nav-comment" data-toggle="tab">Bình luận
                ({{$comments->total()}})</a>
            </div>
          </nav>
        </div>

        <div class="card-body">
          <div class="tab-content">
            <div class="tab-pane active" id="tab-detail" role="tabpanel" aria-labelledby="nav-home-tab">
              <div style="color: black">{!!$products->content!!}</div>
              <div class="space80">&nbsp;</div>
            </div>

            <div class="tab-pane" id="tab-comment" role="tabpanel" aria-labelledby="nav-home-tab">
              <form action="{{route('comment.store', $products->id)}}" method="post" autocomplete="off">
                @csrf
                <div class="comment">
                  <label>Họ tên:</label>
                  <input type="text" name="name" id="name" required>
                  <label>Phản hồi:</label>
                  <textarea name="content" maxlength="200" placeholder="Nội dung giới hạn 200 ký tự"
                    required></textarea>
                </div>
                <button type="submit" value="Thêm mới" class="btn btn-primary">Gửi phản hồi</button>
              </form>

              <div class="space50">&nbsp;</div>

              <div class="card border-0">
                <div class="card-body">
                  @foreach ($comments as $c)
                  <div class="media mb-1">
                    <img width="50px" class="mr-3" src="{{asset("image/comment/guest-user.jpg")}}">
                    <div class="media-body">
                      <div class="row">
                        <div class="col-sm-9">
                          <p class="mt-0 font-weight-bold">{{$c->name}}</p>
                        </div>
                        <div class="col-sm-3">
                          <div class="text-right font-italic">{{date("G:i j-n-Y", strtotime($c->created_at))}}</div>
                        </div>
                      </div>
                      <div class="row mt-3">
                        <div class="col-sm-9">
                          <p class="">{{$c->content}}</p>
                        </div>
                        <div class="col-sm-3 text-right">
                          <span id="reply1" class="btn btn-secondary btn-sm text-white">Phản hồi</span>
                        </div>
                      </div>

                      <div class="space20">&nbsp;</div>

                      <div class="reply-form">
                        <form action="{{route('reply.store', $c->id)}}" method="post" autocomplete="off">
                          @csrf
                          <input type="text" name="name" placeholder="Họ tên" required>
                          <textarea name="content" maxlength="200" placeholder="Nội dung giới hạn 200 ký tự"
                            required></textarea>
                          <button type="submit" class="btn btn-primary btn-sm">Gửi</button>
                        </form>
                        <div class="space40">&nbsp;</div>
                      </div>

                      @php
                      $replies = App\Reply::where('comment_id', $c->id)->orderBy('created_at', 'asc')->get();
                      @endphp

                      <div class="row">
                        <div class="col-sm-12">
                          @foreach ($replies as $r)
                          <div class="media">
                            <img width="50px" class="mr-3" src="{{asset("image/comment/guest-user.jpg")}}">
                            <div class="media-body">
                              <div class="row">
                                <div class="col-sm-8">
                                  <p class="font-weight-bold">{{$r->name}}</p>
                                </div>
                                <div class="col-sm-4">
                                  <div id="reply1" class="text-right font-italic">
                                    {{date("G:i j-n-Y", strtotime($r->created_at))}}
                                  </div>
                                </div>
                              </div>
                              <div class="row mt-3">
                                <div class="col-sm-8">
                                  <p>{{$r->content}}</p>
                                </div>
                                <div class="col-sm-4"></div>
                              </div>
                            </div>
                          </div>
                          @endforeach
                        </div>{{-- end col-sm-12 --}}
                      </div>{{-- end row --}}
                    </div>
                  </div>
                  @endforeach
                </div>
              </div>
              <div class="text-center">{{$comments->links()}}</div>
            </div>
          </div>
        </div>


        <div class="beta-products-list">
          <h4>Sản phẩm liên quan</h4>
          <div class="space80">&nbsp;</div>
          <div class="owl-carousel owl-theme">
            @foreach ($relations as $r)
            <div class="item">
              <div class="single-item">
                <div class="single-item-header">
                  <a href="{{route('product.show', $r->id)}}">
                    <img src="{{asset("image/product/{$r->thumbnail}")}}">
                  </a>
                </div>
              </div>
              <div class="single-item-body">
                <p class="single-item-title"><b>{{$r->name}}</b></p>
                <p class="single-item-price">
                  <span class="color-gray">{{number_format($r->price,0,'','.')}}đ</span>
                </p>
              </div>
              <div class="space20">&nbsp;</div>
              <div class="single-item-caption">
                <p class="single-item-title"><b style="color: green">{{$r->status}}</b></p>
                <a class="add-to-cart pull-left" href="{{route('cart.add', $r->id)}}">
                  <i class="fas fa-cart-plus"></i>
                </a>
                <a class="beta-btn primary" href="{{route('product.show', $r->id)}}">
                  Chi tiết
                  <i class="fa fa-chevron-right"></i>
                </a>
                <div class="space20">&nbsp;</div>
              </div>
            </div>
            @endforeach
          </div>
        </div>
      </div> <!-- .beta-products-list -->

      <div class="col-sm-3 aside">
        <div class="widget">
          <h3 class="widget-title">Có thể bạn quan tâm</h3>
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