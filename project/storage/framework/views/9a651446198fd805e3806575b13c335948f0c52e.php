

<?php $__env->startSection('content'); ?>
<div class="inner-header">
  <div class="container">
    <div class="pull-left">
      <h6 class="inner-title">Liên hệ</h6>
    </div>
    <div class="pull-right">
      <div class="beta-breadcrumb font-large">
        <a href="<?php echo e(url('/')); ?>" class="home fa fa-home"> Trang chủ</a> / <span>Liên hệ</span>
      </div>
    </div>
    <div class="clearfix"></div>
  </div>
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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.theme', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\watch_store\project\resources\views/theme/contact.blade.php ENDPATH**/ ?>