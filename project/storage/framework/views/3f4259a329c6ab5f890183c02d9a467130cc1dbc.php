

<?php $__env->startSection('content'); ?>
<div class="inner-header">
  <div class="container">
    <div class="pull-left">
      <h6 class="inner-title">Thương hiệu </h6>
    </div>
    <div class="pull-right">
      <div class="beta-breadcrumb font-large">
        <a href="<?php echo e(url('/')); ?>" class="home fa fa-home"> Trang chủ</a> / <span>Thương hiệu</span>
      </div>
    </div>
    <div class="clearfix"></div>
  </div>
</div>
<div class="container">
  <div id="content" class="space-top-none">
    <div class="main-content">
      <div class="space60">&nbsp;</div>
      <div class="row">
        <div class="col-sm-3">
          <ul class="aside-menu">
            <li><a href="#">Typography</a></li>
            <li><a href="#">Buttons</a></li>
            <li><a href="#">Dividers</a></li>
            <li><a href="#">Columns</a></li>
            <li><a href="#">Icon box</a></li>
            <li><a href="#">Notifications</a></li>
            <li><a href="#">Progress bars and Skill meter</a></li>
            <li><a href="#">Tabs</a></li>
            <li><a href="#">Testimonial</a></li>
            <li><a href="#">Video</a></li>
            <li><a href="#">Social icons</a></li>
            <li><a href="#">Carousel sliders</a></li>
            <li><a href="#">Custom List</a></li>
            <li><a href="#">Image frames &amp; gallery</a></li>
            <li><a href="#">Google Maps</a></li>
            <li><a href="#">Accordion and Toggles</a></li>
            <li class="is-active"><a href="#">Custom callout box</a></li>
            <li><a href="#">Page section</a></li>
            <li><a href="#">Mini callout box</a></li>
            <li><a href="#">Content box</a></li>
            <li><a href="#">Computer sliders</a></li>
            <li><a href="#">Pricing &amp; Data tables</a></li>
            <li><a href="#">Process Builders</a></li>
          </ul>
        </div>
        <div class="col-sm-9">
          <div class="beta-products-list">
            <h4>Sản phẩm mới</h4>
            <div class="beta-products-details">
              <div class="clearfix"></div>
            </div>

            <div class="row">
              <?php $__currentLoopData = $brands; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $b): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <div class="col-sm-4">
                <div class="single-item">
                  <div class="single-item-header">
                    <a href="<?php echo e(route('product.show', $b->id)); ?>"><img src="<?php echo e(asset("image/product/{$b->thumbnail}")); ?>" alt=""></a>
                  </div>
                  <div class="single-item-body">
                    <p class="single-item-title"><b><?php echo e($b->name); ?></b></p>
                    <p class="single-item-price">
                      <span class="color-gray"><?php echo e(number_format($b->price,0,'','.')); ?>đ</span>
                    </p>
                  </div>
                  <div class="single-item-caption">
                    <a class="add-to-cart pull-left" href="<?php echo e(route('cart.add', $b->id)); ?>"><i class="fa fa-shopping-cart"></i></a>
                    <a class="beta-btn primary" href="<?php echo e(route('product.show', $b->id)); ?>">Chi tiết <i class="fa fa-chevron-right"></i></a>
                    <div class="clearfix"></div>
                  </div>
                </div>
              </div>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
          </div> <!-- .beta-products-list -->

          <div class="space50">&nbsp;</div>

          <div class="beta-products-list">
            <h4>Sản phẩm bán chạy</h4>
            <div class="beta-products-details">
              <div class="clearfix"></div>
            </div>
            
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
                    <a class="add-to-cart pull-left" href="<?php echo e(route('cart.add', $r->id)); ?>"><i class="fa fa-shopping-cart"></i></a>
                    <a class="beta-btn primary" href="<?php echo e(route('product.show', $r->id)); ?>">Chi tiết <i class="fa fa-chevron-right"></i></a>
                    <div class="clearfix"></div>
                  </div>
                </div>
              </div>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            <div class="space40">&nbsp;</div>

          </div> <!-- .beta-products-list -->
        </div>
      </div> <!-- end section with sidebar and main content -->


    </div> <!-- .main-content -->
  </div> <!-- #content -->
</div> <!-- .container -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.theme', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\watch_store\project\resources\views/theme/brand.blade.php ENDPATH**/ ?>