@extends('layouts.theme')

@section('content')
<div class="inner-header">
  <div class="container">
    <div class="pull-left">
      <h6 class="inner-title">Giới thiệu</h6>
    </div>
    <div class="pull-right">
      <div class="beta-breadcrumb font-large">
        <a href="{{url('/')}}" class="home fa fa-home"> Trang chủ</a> / <span>Giới thiệu</span>
      </div>
    </div>
    <div class="clearfix"></div>
  </div>
</div>
<div class="container">
  <div id="content">
    <div class="our-history">
      <h3 class="text-center">GIỚI THIỆU VỀ CÔNG TY Wach Shop</h3>
      <div class="space35">&nbsp;</div>

      <p>Tên đầy đủ: <strong>Công ty TNHH xuất nhập khẩu phân phối Watch Shop.</strong></p>
      <p>MSST: <strong>0314336787</strong></p>
      <p>Địa chỉ công ty: <strong>Số 92A - Lê Thanh Nghị – Hai Bà Trưng – Hà Nội.</strong></p>

      <div class="space35">&nbsp;</div>

      <p>Công ty TNHH xuất nhập khẩu phân phối Trần Đức được thành lập từ năm 2016 với mục tiêu trở thành một trong
        những nhà nhập khẩu và phân phối các thương hiệu đồng hồ đeo tay lớn tại thị trường Việt Nam</p>

      <p class="text-center"><img src="{{asset('assets/dest/images/big_watchshop_logo.png')}}"></p>

      <p>Với những mục tiêu và những kế hoạch dài hạn của Ban giám đốc công ty. Chỉ trong một thời gian ngắn đã xây dựng
        và phát triển thị trường với hơn 64 chi nhánh đại lý trên khắp cả nước.</p>

      <div class="space35">&nbsp;</div>

      <p class="text-center"><img width="700px" src="{{asset('image/about/about-1.jpg')}}"></p>

      <div class="space35">&nbsp;</div>

      <p>Mục tiêu của của công ty trong những năm tới không gì khác ngoài việc đưa về thị trường Việt Nam những thương
        hiệu đồng hồ uy tín trên thế giới, phù hợp với nhu cầu và giá thành tại Việt Nam.</p>

      <div class="space35">&nbsp;</div>

      <p class="text-center"><img width="" src="{{asset('image/about/about-2.jpg')}}"></p>

      <div class="space35">&nbsp;</div>

      <p>Chúng tôi sẽ luôn cố gắng phấn đấu vì một mục tiêu đưa tới người yêu thích đồng hồ trên cả nước những thương
        hiệu đồng hồ chất lượng cao phù hợp với nhu cầu và giá thành tại Việt Nam. Cam kết sẽ hỗ trợ hết mình chung tay
        cùng các đại lý mở rộng và thay đổi niềm tin của người dùng đồng hồ trên cả nước.</p>
    </div>
  </div> <!-- #content -->
</div> <!-- .container -->

<script>
  /* <![CDATA[ */
  jQuery(document).ready(function ($) {
    'use strict';

    try {
      if ($(".animated")[0]) {
        $('.animated').css('opacity', '0');
      }
      $('.triggerAnimation').waypoint(function () {
        var animation = $(this).attr('data-animate');
        $(this).css('opacity', '');
        $(this).addClass("animated " + animation);
      },
        {
          offset: '80%',
          triggerOnce: true
        }
      );
    } catch (err) {

    }

    var wow = new WOW(
      {
        boxClass: 'wow',      // animated element css class (default is wow)
        animateClass: 'animated', // animation css class (default is animated)
        offset: 150,          // distance to the element when triggering the animation (default is 0)
        mobile: false        // trigger animations on mobile devices (true is default)
      }
    );
    wow.init();
    // NUMBERS COUNTER START
    $('.numbers').data('countToOptions', {
      formatter: function (value, options) {
        return value.toFixed(options.decimals).replace(/\B(?=(?:\d{3})+(?!\d))/g, ',');
      }
    });

    // start timer
    $('.timer').each(count);

    function count(options) {
      var $this = $(this);
      options = $.extend({}, options || {}, $this.data('countToOptions') || {});
      $this.countTo(options);
    } // NUMBERS COUNTER END 

    // color box

    //color
    jQuery('#style-selector').animate({
      left: '-213px'
    });

    jQuery('#style-selector a.close').click(function (e) {
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

<script type="text/javascript">
  $(function () {
    // this will get the full URL at the address bar
    var url = window.location.href;

    // passes on every "a" tag
    $(".main-menu a").each(function () {
      // checks if its the same on the address bar
      if (url == (this.href)) {
        $(this).closest("li").addClass("active");
        $(this).parents('li').addClass('parent-active');
      }
    });
  });
</script>
@endsection