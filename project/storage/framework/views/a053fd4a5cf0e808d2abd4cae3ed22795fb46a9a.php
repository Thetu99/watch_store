

<?php $__env->startSection('content'); ?>

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="3000" data-pause="false"">
  <ol class=" carousel-indicators">
  <?php $__currentLoopData = $banners; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $b): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <li data-target="#carouselExampleIndicators" data-slide-to="<?php echo e($loop->index); ?>" <?php if($loop->first): ?> class="active"
    <?php endif; ?>>
  </li>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </ol>
  <div class="carousel-inner">
    <?php $__currentLoopData = $banners; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $b): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="carousel-item <?php if($loop->first): ?> active <?php endif; ?>">
      <img src="<?php echo e(asset("image/banner/$b->thumbnail")); ?>" class="d-block w-100">
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Trước</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Sau</span>
  </a>
</div>

<div class="container">
  <div id="content" class="space-top-none">
    <div class="main-content">
      <div class="space60">&nbsp;</div>
      <div class="row">
        <div class="col-sm-12">
          <div class="filter">
            <h6>Chọn mức giá:</h6>
            <div class="space20">&nbsp;</div>
            <a href="<?php echo e(route('filter', '<1m')); ?>">Dưới 1 triệu</a>&nbsp;
            <a href="<?php echo e(route('filter', '1m-3m')); ?>">Từ 1-3 triệu</a>&nbsp;
            <a href="<?php echo e(route('filter', '3m-5m')); ?>">Từ 3-5 triệu</a>&nbsp;
            <a href="<?php echo e(route('filter', '>5m')); ?>">Trên 5 triệu</a>
          </div>

        </div>
      </div>
      <div class="space60">&nbsp;</div>
      <div class="row">
        <div class="col-sm-12">
          <div class="beta-products-list">
            <h3 class="text-center">Sản phẩm mới</h3>
            <div class="beta-products-details">
              <div class="space40">&nbsp;</div>
            </div>

            <div class="row d-flex justify-content-center">
              <div class="list">
                <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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
                    <div class="space20">&nbsp;</div>
                    <div class="single-item-caption">
                      <p class="single-item-title"><b style="color: green"><?php echo e($p->status); ?></b></p>
                      <a class="add-to-cart pull-left" href="<?php echo e(route('cart.add', $p->id)); ?>">
                        <i class="fas fa-cart-plus"></i>
                      </a>
                      <a class="beta-btn primary" href="<?php echo e(url("product/$p->id")); ?>">Chi tiết
                        <i class="fa fa-chevron-right"></i>
                      </a>
                      <div class="space40">&nbsp;</div>
                    </div>
                  </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </div>
            </div>
          </div>

          <div class="space80">&nbsp;</div>

          <div class="beta-products-list">
            <h3 class="text-center">Có thể bạn quan tâm</h3>
            <div class="beta-products-details">
              <div class="space40">&nbsp;</div>
            </div>
            <div class="row">
              <div class="owl-carousel owl-theme">
                <?php $__currentLoopData = $randoms; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $r): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="item">
                  <div class="single-item">
                    <div class="single-item-header">
                      <a href="<?php echo e(url("product/$r->id")); ?>">
                        <img src="<?php echo e(asset("image/product/$r->thumbnail")); ?>">
                      </a>
                    </div>
                    <div class="single-item-body">
                      <p class="single-item-title"><b><?php echo e($r->name); ?></b></p>
                      <p class="single-item-price">
                        <span class="color-gray"><?php echo e(number_format($r->price, 0, '', '.')); ?>đ</span>
                      </p>
                    </div>
                    <div class="space20">&nbsp;</div>
                    <div class="single-item-caption">
                      <p class="single-item-title"><b style="color: green"><?php echo e($r->status); ?></b></p>
                      <a class="add-to-cart pull-left" href="<?php echo e(route('cart.add', $r->id)); ?>">
                        <i class="fas fa-cart-plus"></i>
                      </a>
                      <a class="beta-btn primary" href="<?php echo e(url("product/$r->id")); ?>">
                        Chi tiết
                        <i class="fa fa-chevron-right"></i>
                      </a>
                      <div class="space80">&nbsp;</div>
                    </div>
                  </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.theme', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\watch_store\project\resources\views/theme/home.blade.php ENDPATH**/ ?>