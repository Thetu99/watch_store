@extends('layouts.theme')

@section('content')
<div class="inner-header">
  <div class="container">
    <div class="pull-left">
      <h6 class="inner-title">Giới thiệu</h6>
    </div>
    <div class="pull-right">
      <div class="beta-breadcrumb font-large">
        <a href="index.html">Home</a> / <span>Giới thiệu</span>
      </div>
    </div>
    <div class="clearfix"></div>
  </div>
</div>
<div class="container">
  <div id="content">
    <div class="our-history">
      <h2 class="text-center wow fadeInDown">Lịch sử</h2>
      <div class="space35">&nbsp;</div>
      <h3>GIỚI THIỆU VỀ CÔNG TY Wach Store</h3>

      <p>Tên đầy đủ: Công ty TNHH xuất nhập khẩu phân phối Watch Store </p>

       <p> MSST: 0363907265 -  0965593225</p>
        
       <p> Địa chỉ công ty:  Số 92A - Lê Thanh Nghị – Hai Bà Trưng – Hà Nội</p>

      <p>Được thành lập bởi tập đoàn Norbreeze vào năm 2014 tại Singapore, với cam kết mang đến trải nghiệm mua sắm trực
        tuyến cho bạn cùng sự lựa chọn đa dạng từ những thương hiệu chính hãng. Hiện Cocomi đã có mặt tại Malaisia và
        Úc.</p>
      <img src="{{asset('assets/dest/images/logo_watch.png')}}" alt="" width="500px" class="text-center">
      <p>Chính thức ra mắt tại Việt Nam vào tháng 5/2020, với các thương hiệu nổi tiếng thế giới như trang sức Pandora,
        đồng hồ BERING, Olivia Burton, PAUL HEWITT, August Berg. WATCH STORE chắc chắn sẽ là điểm mua sắm trực tuyến cho
        các tín đồ đam mê phụ kiện thời trang để bạn thể hiện phong cách riêng của mình một cách thật duy mỹ!</p>

      <p>Chúng tôi tin rằng phong cách và thời trang là có thể tiếp cận đến với mỗi cá nhân để bạn hoàn thiện và luôn
        nổi bật với vẻ ngoài của mình.</p>
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
