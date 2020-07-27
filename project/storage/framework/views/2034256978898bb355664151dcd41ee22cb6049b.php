

<?php $__env->startSection('content'); ?>
<div class="container">
  <div id="content" class="space-top-none">
    <div class="main-content">
      <div class="space60">&nbsp;</div>
      <div class="row">
        <div class="beta-products-list">
          <h6 class="inner-title">Tìm kiếm</h6>
          <div class="beta-products-details">
            <p class="pull-left"> Tìm thấy <b style="color: red"><?php echo e(count($products)); ?></b> sản phẩm </p>
            <div class="clearfix"></div>
          </div>

          <div class="row">
            <?php
            $i=0;
            ?>
            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php
            $i++;
            ?>
            <div class="col-sm-3">
              <div class="single-item">
                <div class="single-item-header">
                  <a href="<?php echo e(url("product/$p->id")); ?>">
                    <img src="<?php echo e(asset("image/product/$p->thumbnail")); ?>" />
                  </a>
                </div>
                <div class="single-item-body">
                  <p class="single-item-title"><b><?php echo e($p->name); ?></b></p>
                  <p class="single-item-price">
                    <span class="color-gray"><?php echo e(number_format($p->price, 0, '', '.')); ?>đ</span>
                  </p>
                </div>
                <div class="single-item-caption">
                  <a class="add-to-cart pull-left" href="<?php echo e(route('cart.add', $p->id)); ?>"><i
                      class="fa fa-shopping-cart"></i></a>
                  <a class="beta-btn primary" href="<?php echo e(url("product/$p->id")); ?>">Chi tiết<i
                      class="fa fa-chevron-right"></i></a>
                  <div class="clearfix"></div>
                </div>
              </div>
            </div>
            <?php if($i==4): ?>
            <div class="space40">&nbsp;</div>
            <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </div>
        </div>
        <!-- .beta-products-list -->
      </div>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.theme', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\watch_store\project\resources\views/theme/search.blade.php ENDPATH**/ ?>