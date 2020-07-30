<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Watch Store</title>
  <link href="http://fonts.googleapis.com/css?family=Dosis:300,400" rel="stylesheet" type="text/css" />
  <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" href="<?php echo e(asset('bootstrap-4.5.0/css/bootstrap.min.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('bootstrap-3.4.1/css/bootstrap.min.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('fontawesome-5.14.0/css/all.min.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('assets/dest/vendors/colorbox/example3/colorbox.css')); ?>" />
  <link rel="stylesheet" href="<?php echo e(asset('assets/dest/rs-plugin/css/settings.css')); ?>" />
  <link rel="stylesheet" href="<?php echo e(asset('assets/dest/rs-plugin/css/responsive.css')); ?>" />
  <link rel="stylesheet" href="<?php echo e(asset('assets/dest/css/style.css')); ?>" />
  <link rel="stylesheet" href="<?php echo e(asset('assets/dest/css/animate.css')); ?>" />
  <link rel="stylesheet" href="<?php echo e(asset('assets/dest/css/huong-style.css')); ?>" />
</head>

<body>
  <div id="header">
    <div class="header-top">
      <div class="container">
        <div class="pull-left auto-width-left">
          <ul class="top-menu menu-beta l-inline">
            <li>
              <a href="#">
                <i class="fa fa-home" style="font-size: medium; color: black"></i>
                Số 92A - Lê Thanh Nghị – Hai Bà Trưng – Hà Nội
              </a>
            </li>
            <li>
              <a href="#">
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
          <a href="<?php echo e(url('home')); ?>" id="logo"><img src="<?php echo e(asset('assets/dest/images/logo_watch.png')); ?>" width="200px"
              alt="" /></a>
        </div>
        <div class="pull-right beta-components space-left ov">
          <div class="space10">&nbsp;</div>
          <div class="beta-comp">
            <form method="get" id="searchform" autocomplete="off" action="<?php echo e(url('search')); ?>">
              <input type="text" name="key" id="s" placeholder="Nhập tên sản phẩm..." />
              <button class="fa fa-search" type="submit" id="searchsubmit"></button>
            </form>
          </div>

          <div class="beta-comp">
            <a href="<?php echo e(url('cart')); ?>" class="btn">
              <i class="fas fa-cart-arrow-down"></i>
              Giỏ hàng (<b style="color: red"><?php echo e(Cart::count()); ?></b>)
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
            <li><a href="<?php echo e(url('home')); ?>">Trang chủ</a></li>
            <li>
              <a href="#">Thương hiệu</a>
              <ul class="sub-menu">
                <?php
                $brands = App\Brand::all();
                ?>
                <?php $__currentLoopData = $brands; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $b): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li>
                  <a href="<?php echo e(url("brand/$b->name")); ?>"><?php echo e($b->name); ?></a>
                </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </ul>
            </li>
            <li><a href="<?php echo e(url('about')); ?>">Giới thiệu</a></li>
            <li><a href="<?php echo e(url('contact')); ?>">Liên hệ</a></li>
          </ul>
          <div class="clearfix"></div>
        </nav>
      </div>
      <!-- .container -->
    </div>
    <!-- .header-bottom -->
  </div>
  <!-- #header -->
  <?php echo $__env->yieldContent('content'); ?>
  <!-- .container -->

  
  <!-- #footer -->
  <div class="copyright">
    <div class="container">
      <div class="col-sm-12">
        <p class="pull-left">Privacy policy. &copy; 2020</p>
        <p class="pull-right pay-options">
          <a href="#"><img src="<?php echo e(asset('assets/dest/images/pay/master.png')); ?>"></a>
          <a href="#"><img src="<?php echo e(asset('assets/dest/images/pay/visa.png')); ?>"></a>
          <a href="#"><img src="<?php echo e(asset('assets/dest/images/pay/paypal.png')); ?>"></a>
        </p>
      </div>
    </div><!-- .container -->
  </div><!-- .copyright -->

  <!-- include js files -->
  <script src="<?php echo e(asset('assets/dest/js/jquery.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/dest/vendors/jqueryui/jquery-ui-1.10.4.custom.min.js')); ?>"></script>
  <script src="<?php echo e(asset('bootstrap-4.5.0/js/bootstrap.min.js')); ?>"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="<?php echo e(asset('assets/dest/vendors/bxslider/jquery.bxslider.min.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/dest/vendors/colorbox/jquery.colorbox-min.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/dest/vendors/animo/Animo.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/dest/vendors/dug/dug.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/dest/js/scripts.min.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/dest/rs-plugin/js/jquery.themepunch.tools.min.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/dest/rs-plugin/js/jquery.themepunch.revolution.min.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/dest/js/waypoints.min.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/dest/js/wow.min.js')); ?>"></script>
  <!--customjs-->
  <script src="<?php echo e(asset('assets/dest/js/custom2.js')); ?>"></script>
  <script>
    $(document).ready(function ($) {
        $(window).scroll(function () {
          if ($(this).scrollTop() > 150) {
            $(".header-bottom").addClass("fixNav");
          } else {
            $(".header-bottom").removeClass("fixNav");
          }
        });

        var title = $(".inner-title").text();
        if(title=="Giỏ hàng" || title=="Liên hệ" || title=="Đặt hàng"){
          $("body").css({"display" : "flex", "flex-direction" : "column"});
        }

        //Hiển thị form trả lời
        $(".reply-form").hide();
        $("span#reply1").click(function(){
          $(this).closest(".row").next().next().toggle();
        });

        //Chuyển tab mô tả và bình luận
        $("a#nav-comment").click(function(){
          $(this).addClass("font-weight-bold");
          $("a#nav-detail").removeClass("font-weight-bold");
        });
        $("a#nav-detail").click(function(){
          $(this).addClass("font-weight-bold");
          $("a#nav-comment").removeClass("font-weight-bold");
        });

        //Cập nhật giỏ hàng
        $("#update-cart").hide();        
        $(".qty_number").change(function(){
          if($(this).on('blur mouseleave', function(){
            $("#update-cart").click();
          }));
        });

        //Bắt buộc nhập số điện thoại
        $("#phone").on('keypress keyup blur', function(event){
          $(this).val($(this).val().replace(/[^\d].+/, ""));
            if ((event.which < 48 || event.which > 57)) {
              event.preventDefault();
            }
        });
    });
  </script>
</body>

</html><?php /**PATH C:\xampp\htdocs\watch_store\project\resources\views/layouts/theme.blade.php ENDPATH**/ ?>