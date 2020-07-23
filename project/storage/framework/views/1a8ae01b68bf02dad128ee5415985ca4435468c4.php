

<?php $__env->startSection('content'); ?>
<div class="inner-header">
  <div class="container">
    <div class="pull-left">
      <h6 class="inner-title">Chi tiết sản phẩm</h6>
    </div>
    <div class="pull-right">
      <div class="beta-breadcrumb font-large">
        <a href="<?php echo e(url('/')); ?>" class="home fa fa-home"> Trang chủ</a> / <span>Sản phẩm</span>
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
            <img src="<?php echo e(asset("image/product/{$products->thumbnail}")); ?>" alt="">
          </div>
          <div class="col-sm-8">
            <div class="single-item-body">
              <p class="single-item-title"><b><?php echo e($products->name); ?></b></p>
              <p class="single-item-price">
                <span class="color-gray"><?php echo e(number_format($products->price,0,'','.')); ?>đ</span>
              </p>              
            </div>

            <div class="clearfix"></div>
            <div class="space20">&nbsp;</div>

            <div class="single-item">
              <p class="single-item-title"><b><?php echo e($products->status); ?></b></p>
              <a class="add-to-cart pull-left" href="<?php echo e(route('cart.add', $products->id)); ?>">
                <i class="fa fa-shopping-cart"></i>
                <a class="beta-btn primary" href="<?php echo e(route('cart.add', $products->id)); ?>">Cho vào giỏ hàng</a>
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
            <li><a href="#tab-reviews">Đánh giá (0)</a></li>
          </ul>

          <div class="panel" id="tab-description">
            <?php echo $products->content; ?>

          </div>
          <div class="panel" id="tab-reviews">
            <p>Không có đánh giá</p>
          </div>
        </div>
        <div class="space50">&nbsp;</div>
        <div class="beta-products-list">
          <h4>Các sản phẩm khác</h4>

          <div class="row">
            <?php $__currentLoopData = $randoms; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $r): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-sm-4">
              <div class="single-item">
                <div class="single-item-header">
                  <a href="<?php echo e(route('product.show', $r->id)); ?>"><img src="<?php echo e(asset("image/product/{$r->thumbnail}")); ?>"></a>
                </div>
                <div class="single-item-body">
                  <p class="single-item-title"><b><?php echo e($r->name); ?></b></p>
                  <p class="single-item-price">
                    <span class="color-gray"><?php echo e(number_format($r->price,0,'','.')); ?>đ</span>
                  </p>
                </div>
                <div class="single-item-caption">
                  <a class="add-to-cart pull-left" href="<?php echo e(route('cart.add', $r->id)); ?>"><i
                      class="fa fa-shopping-cart"></i></a>
                  <a class="beta-btn primary" href="<?php echo e(route('product.show', $r->id)); ?>">Chi tiết<i
                      class="fa fa-chevron-right"></i></a>
                  <div class="clearfix"></div>
                </div>
              </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

          </div>
        </div> <!-- .beta-products-list -->
      </div>
      <div class="col-sm-3 aside">
        <div class="widget">
          <h3 class="widget-title">Đồng hồ bán chạy nhất</h3>
          <div class="widget-body">
            <div class="beta-sales beta-lists">
              <?php $__currentLoopData = $randoms; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $r): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <div class="media beta-sales-item">
                <a class="pull-left" href="<?php echo e(route('product.show', $r->id)); ?>"><img
                    src="<?php echo e(asset("image/product/{$r->thumbnail}")); ?>"></a>
                <div class="media-body">
                  <b><?php echo e($r->name); ?></b>
                  <span class="color-gray"><?php echo e(number_format($r->price,0,'','.')); ?>đ</span>
                </div>
              </div>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
          </div>
        </div> <!-- best sellers widget -->
        <div class="widget">
          <h3 class="widget-title">Đồng hồ mới</h3>
          <div class="widget-body">
            <div class="beta-sales beta-lists">
              <?php $__currentLoopData = $news; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $n): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <div class="media beta-sales-item">
                <a class="pull-left" href="<?php echo e(route('product.show', $n->id)); ?>"><img
                    src="<?php echo e(asset("image/product/{$n->thumbnail}")); ?>"></a>
                <div class="media-body">
                  <b><?php echo e($n->name); ?></b>
                  <span class="color-gray"><?php echo e(number_format($n->price,0,'','.')); ?>đ</span>
                </div>
              </div>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.theme', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\watch_store\project\resources\views/theme/product.blade.php ENDPATH**/ ?>