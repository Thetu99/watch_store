

<?php $__env->startSection('content'); ?>
<div class="inner-header">
  <div class="container">
    <div class="pull-left">
      <h6 class="inner-title">Thương hiệu <?php $__currentLoopData = $brands; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $b): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php echo e($b->name); ?>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?></h6>
    </div>
    <div class="pull-right">
      <div class="beta-breadcrumb font-large">
        <a href="<?php echo e(url('home')); ?>" class="home fa fa-home"> Trang chủ</a> / <span>Thương hiệu</span>
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
          <div class="filter">
            <ul class="aside-menu">
              <li>
                <h6>Mức giá</h6>
              </li>
              <li>
                <input type="radio" name="filter" <?php if(request()->price==null): ?> checked <?php endif; ?>>&nbsp;
                <a class="filter" href="<?php echo e(url("brand/$b->name")); ?>">Toàn bộ</a>
              </li>
              <li>
                <input type="radio" name="filter" <?php if(request()->price=='<1'): ?> checked <?php endif; ?>>&nbsp;
                  <a class="filter" href="<?php echo e(url("brand/$b->name/<1")); ?>">Dưới 1 triệu</a>
              </li>
              <li>
                <input type="radio" name="filter" <?php if(request()->price=='1-3'): ?> checked <?php endif; ?>>&nbsp;
                <a class="filter" href="<?php echo e(url("brand/$b->name/1-3")); ?>">Từ 1-3 triệu</a>
              </li>
              <li>
                <input type="radio" name="filter" <?php if(request()->price=='3-5'): ?> checked <?php endif; ?>>&nbsp;
                <a class="filter" href="<?php echo e(url("brand/$b->name/3-5")); ?>">Từ 3-5 triệu</a>
              </li>
              <li>
                <input type="radio" name="filter" <?php if(request()->price=='>5'): ?> checked <?php endif; ?>>&nbsp;
                <a class="filter" href="<?php echo e(url("brand/$b->name/>5")); ?>">Trên 5 triệu</a>
              </li>
            </ul>
          </div>
        </div>

        <div class="col-sm-9">
          <div class="beta-products-list">

            <div class="clearfix"></div>

            <div class="row">
              <?php if($news->total()>0): ?>
              <?php $__currentLoopData = $news; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $n): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <div class="col-sm-4">
                <div class="single-item">
                  <div class="single-item-header">
                    <a href="<?php echo e(route('product.show', $n->id)); ?>"><img src="<?php echo e(asset("image/product/{$n->thumbnail}")); ?>"
                        alt=""></a>
                  </div>
                  <div class="single-item-body">
                    <p class="single-item-title"><b><?php echo e($n->name); ?></b></p>
                    <p class="single-item-price">
                      <span class="color-gray"><?php echo e(number_format($n->price,0,'','.')); ?>đ</span>
                    </p>
                  </div>
                  <div class="space20">&nbsp;</div>
                  <div class="single-item-caption">
                    <p class="single-item-title"><b style="color: green"><?php echo e($n->status); ?></b></p>
                    <a class="add-to-cart pull-left" href="<?php echo e(route('cart.add', $n->id)); ?>"><i
                        class="fa fa-shopping-cart"></i></a>
                    <a class="beta-btn primary" href="<?php echo e(route('product.show', $n->id)); ?>">Chi tiết <i
                        class="fa fa-chevron-right"></i></a>
                    <div class="clearfix"></div>
                  </div>
                </div>
              </div>
              <?php if($loop->iteration==3): ?>
              <div class="clearfix"></div>
              <div class="space80">&nbsp;</div>
              <?php endif; ?>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

              <?php else: ?>
              <div class="filter">
                <div class="space60">&nbsp;</div>
                <p>Không tìm thấy sản phẩm</p>
              </div>
              <?php endif; ?>
            </div>
            <div class="space60">&nbsp;</div>
            <div class="text-center"><?php echo e($news->links()); ?></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.theme', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\watch_store\project\resources\views/theme/brand.blade.php ENDPATH**/ ?>