

<?php $__env->startSection('content'); ?>
<div class="inner-header">
  <div class="container">
    <div class="pull-left">
    <h6 class="inner-title">Thương hiệu <?php $__currentLoopData = $brands; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $b): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php echo e($b->name); ?></h6>
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
          
        </div>
        <div class="col-sm-9">
          <div class="beta-products-list">
            <h4>Sản phẩm mới</h4>
            <div class="beta-products-details">
              <div class="clearfix"></div>
            </div>

            <div class="row">
              <?php $__currentLoopData = $news; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $n): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <div class="col-sm-4">
                <div class="single-item">
                  <div class="single-item-header">
                    <a href="<?php echo e(route('product.show', $n->id)); ?>"><img src="<?php echo e(asset("image/product/{$n->thumbnail}")); ?>" alt=""></a>
                  </div>
                  <div class="single-item-body">
                    <p class="single-item-title"><b><?php echo e($n->name); ?></b></p>
                    <p class="single-item-price">
                      <span class="color-gray"><?php echo e(number_format($n->price,0,'','.')); ?>đ</span>
                    </p>
                  </div>
                  <div class="single-item-caption">
                    <a class="add-to-cart pull-left" href="<?php echo e(route('cart.add', $n->id)); ?>"><i class="fa fa-shopping-cart"></i></a>
                    <a class="beta-btn primary" href="<?php echo e(route('product.show', $n->id)); ?>">Chi tiết <i class="fa fa-chevron-right"></i></a>
                    <div class="clearfix"></div>
                  </div>
                </div>
              </div>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
          </div> <!-- .beta-products-list -->

          <div class="space50">&nbsp;</div>

          <div class="beta-products-list">
            <h4>Sản phẩm nổi bật</h4>
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