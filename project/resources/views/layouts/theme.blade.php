<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Watch Store</title>
  <link href="http://fonts.googleapis.com/css?family=Dosis:300,400" rel="stylesheet" type="text/css" />
  <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" href="{{asset('bootstrap-4.5.0/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('bootstrap-3.4.1/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('fontawesome-5.14.0/css/all.min.css')}}">
  <link rel="stylesheet" href="{{asset('owlcarousel2-2.3.4\dist\assets\owl.carousel.min.css')}}">
  <link rel="stylesheet" href="{{asset('owlcarousel2-2.3.4\dist\assets\owl.theme.default.min.css')}}">
  <link rel="stylesheet" href="{{asset('show-more-items\showMoreItems-theme.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/dest/vendors/colorbox/example3/colorbox.css')}}" />
  <link rel="stylesheet" href="{{asset('assets/dest/rs-plugin/css/settings.css')}}" />
  <link rel="stylesheet" href="{{asset('assets/dest/rs-plugin/css/responsive.css')}}" />
  <link rel="stylesheet" href="{{asset('assets/dest/css/style.css')}}" />
  <link rel="stylesheet" href="{{asset('assets/dest/css/animate.css')}}" />
  <link rel="stylesheet" href="{{asset('assets/dest/css/huong-style.css')}}" />
</head>

<body>
  <div id="header">
    <div class="header-top">
      <div class="container">
        <div class="pull-left auto-width-left">
          <ul class="top-menu menu-beta l-inline">
            <li>
              <a href="{{url('contact')}}">
                <i class="fa fa-home" style="font-size: medium; color: black"></i>
                Số 92A - Lê Thanh Nghị – Hai Bà Trưng – Hà Nội
              </a>
            </li>
            <li>
              <a href="{{url('contact')}}">
                <i class="fa fa-phone" style="font-size: medium; color: black"></i>
                0363907265
              </a>
            </li>
          </ul>
        </div>
        <div class="clearfix"></div>
      </div>
      <!-- .container -->
    </div>
    <!-- .header-top -->
    <div class="header-body">
      <div class="container beta-relative">
        <div class="pull-left">
          <a href="{{url('home')}}" id="logo"><img src="{{asset('assets/dest/images/logo_watch.png')}}" width="200px"
              alt="" /></a>
        </div>
        <div class="pull-right beta-components space-left ov">
          <div class="space10">&nbsp;</div>
          <div class="beta-comp">
            <form method="get" id="searchform" autocomplete="off" action="{{url('search')}}">
              <input type="text" name="key" id="s" placeholder="Nhập tên sản phẩm..." />
              <button class="fa fa-search" type="submit" id="searchsubmit"></button>
            </form>
          </div>

          <div class="beta-comp">
            <a href="{{url('cart')}}" class="btn">
              <i class="fas fa-cart-arrow-down"></i>
              Giỏ hàng (<b style="color: red">{{Cart::count()}}</b>)
            </a>
          </div>
        </div>
        <div class="clearfix"></div>
      </div>
      <!-- .container -->
    </div>
    <!-- .header-body -->
    <div class="header-bottom" style="background-color: #0277b8;">
      <div class="container">
        <a class="visible-xs beta-menu-toggle pull-right" href="#"><span class="beta-menu-toggle-text">Menu</span>
          <i class="fa fa-bars"></i></a>
        <div class="visible-xs clearfix"></div>
        <nav class="main-menu">
          <ul class="l-inline ov">
            <li><a href="{{url('home')}}">Trang chủ</a></li>
            <li>
              <a href="#">Thương hiệu</a>
              <ul class="sub-menu">
                @php
                $brands = App\Brand::all();
                @endphp
                @foreach ($brands as $b)
                <li>
                  <a href="{{url("brand/$b->name/all/all")}}">{{$b->name}}</a>
                </li>
                @endforeach
              </ul>
            </li>
            <li><a href="{{url('about')}}">Giới thiệu</a></li>
            <li><a href="{{url('contact')}}">Liên hệ</a></li>
          </ul>
          <div class="clearfix"></div>
        </nav>
      </div>
      <!-- .container -->
    </div>
    <!-- .header-bottom -->
  </div>
  <!-- #header -->
  @yield('content')
  <!-- .container -->

  {{-- <div id="footer" class="color-div">
    <div class="container">
      <div class="row">
        <div class="col-sm-3">
          <div class="widget">
            <h4 class="widget-title">Instagram Feed</h4>
            <div id="beta-instagram-feed">
              <div></div>
            </div>
          </div>
        </div>
        <div class="col-sm-2">
          <div class="widget">
            <h4 class="widget-title">Information</h4>
            <div>
              <ul>
                <li>
                  <a href="blog_fullwidth_2col.html"><i class="fa fa-chevron-right"></i> Web Design</a>
                </li>
                <li>
                  <a href="blog_fullwidth_2col.html"><i class="fa fa-chevron-right"></i> Web development</a>
                </li>
                <li>
                  <a href="blog_fullwidth_2col.html"><i class="fa fa-chevron-right"></i> Marketing</a>
                </li>
                <li>
                  <a href="blog_fullwidth_2col.html"><i class="fa fa-chevron-right"></i> Tips</a>
                </li>
                <li>
                  <a href="blog_fullwidth_2col.html"><i class="fa fa-chevron-right"></i> Resources</a>
                </li>
                <li>
                  <a href="blog_fullwidth_2col.html"><i class="fa fa-chevron-right"></i> Illustrations</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="col-sm-10">
            <div class="widget">
              <h4 class="widget-title">Contact Us</h4>
              <div>
                <div class="contact-info">
                  <i class="fa fa-map-marker"></i>
                  <p>
                    30 South Park Avenue San Francisco, CA 94108 Phone: +78
                    123 456 78
                  </p>
                  <p>
                    Nemo enim ipsam voluptatem quia voluptas sit asnatur aut
                    odit aut fugit, sed quia consequuntur magni dolores eos
                    qui ratione.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="widget">
            <h4 class="widget-title">Newsletter Subscribe</h4>
            <form action="#" method="post">
              <input type="email" name="your_email" />
              <button class="pull-right" type="submit">
                Subscribe <i class="fa fa-chevron-right"></i>
              </button>
            </form>
          </div>
        </div>
      </div>
      <!-- .row -->
    </div>
    <!-- .container -->
  </div> --}}
  <!-- #footer -->
  <div class="copyright">
    <div class="container">
      <div class="col-sm-12">
        <p class="pull-left">Privacy policy. &copy; 2020</p>
        <p class="pull-right pay-options">
          <img src="{{asset('assets/dest/images/pay/master.png')}}">
          <img src="{{asset('assets/dest/images/pay/visa.png')}}">
          <img src="{{asset('assets/dest/images/pay/paypal.png')}}">
        </p>
      </div>
    </div><!-- .container -->
  </div><!-- .copyright -->

  <!-- include js files -->
  <script src="{{asset('js\jquery-3.5.1.min.js')}}"></script>
  <script src="{{asset('assets/dest/vendors/jqueryui/jquery-ui-1.10.4.custom.min.js')}}"></script>
  <script src="{{asset('bootstrap-4.5.0/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('owlcarousel2-2.3.4\dist\owl.carousel.min.js')}}"></script>
  <script src="{{asset('owlcarousel2-2.3.4\dist\jquery.mousewheel.min.js')}}"></script>
  <script src="{{asset('show-more-items\showMoreItems.min.js')}}"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="{{asset('assets/dest/vendors/bxslider/jquery.bxslider.min.js')}}"></script>
  <script src="{{asset('assets/dest/vendors/colorbox/jquery.colorbox-min.js')}}"></script>
  <script src="{{asset('assets/dest/vendors/animo/Animo.js')}}"></script>
  <script src="{{asset('assets/dest/vendors/dug/dug.js')}}"></script>
  <script src="{{asset('assets/dest/js/scripts.min.js')}}"></script>
  <script src="{{asset('assets/dest/rs-plugin/js/jquery.themepunch.tools.min.js')}}"></script>
  <script src="{{asset('assets/dest/rs-plugin/js/jquery.themepunch.revolution.min.js')}}"></script>
  <script src="{{asset('assets/dest/js/waypoints.min.js')}}"></script>
  <script src="{{asset('assets/dest/js/wow.min.js')}}"></script>
  <!--customjs-->
  <script src="{{asset('assets/dest/js/custom2.js')}}"></script>
  <script src="{{asset('js\theme.js')}}"></script>
</body>

</html>