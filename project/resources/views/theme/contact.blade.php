@extends('layouts.theme')

@section('content')
<div class="inner-header">
  <div class="container">
    <div class="pull-left">
      <h4 class="inner-title">Liên hệ</h4>
    </div>
    <div class="pull-right">
      <div class="beta-breadcrumb font-large">
        <a href="{{url('home')}}" class="home fa fa-home"> Trang chủ</a> / <span>Liên hệ</span>
      </div>
    </div>
    <div class="clearfix"></div>
  </div>
</div>
<div class="beta-map">
		
		<div class="abs-fullwidth beta-map wow flipInX"><<iframe src="https://www.google.com/maps/embed?pb=!1m26!1m12!1m3!1d14897.576445961628!2d105.82995127957682!3d21.016910976075117!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m11!3e6!4m3!3m2!1d21.0277644!2d105.8341598!4m5!1s0x3135ac74418bc1af%3A0xc21b51eae3cb1c31!2zOTIgTMOqIFRoYW5oIE5naOG7iywgQsOhY2ggS2hvYSwgSGFpIELDoCBUcsawbmcsIEjDoCBO4buZaQ!3m2!1d21.003479199999997!2d105.8478705!5e0!3m2!1svi!2s!4v1596527054576!5m2!1svi!2s" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0">
    </iframe>
      </div>
<div class="container">
  <div id="content">
    <div class="our-history">

      <p>- Chủ sở hữu website: <strong>Nguyễn Văn Thành</strong></p>
      <p>- Tên công ty: <strong>Công ty TNHH XNK phân phối Watch Shop</strong></p>
      <p>- Mã số doanh nghiệp: <strong>0314336787</strong></p>
      <p>- Văn phòng giao dịch: <strong>Số 92A - Lê Thanh Nghị – Hai Bà Trưng – Hà Nội</strong></p>
      <p>- Điện thoại liên hệ: <strong>0363907265</strong></p>
      <p>- Email: <strong>thanhnv.hn110@gmail.com</strong></p>
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
