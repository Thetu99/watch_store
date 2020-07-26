

<?php $__env->startSection('content'); ?>
<div class="rev-slider">
  <div class="fullwidthbanner-container">
    <div class="fullwidthbanner">
      <div class="bannercontainer">
        <div class="banner">
          <ul>
            <?php $__currentLoopData = $banners; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $b): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li data-transition="boxfade" data-slotamount="50" class="active-revslide" style="
                width: 100%;
                height: 100%;
                overflow: hidden;
                z-index: 18;
                visibility: hidden;
                opacity: 0;
              ">
              <div class="slotholder" style="width: 100%; height: 100%;" data-duration="undefined"
                data-zoomstart="undefined" data-zoomend="undefined" data-rotationstart="undefined"
                data-rotationend="undefined" data-ease="undefined" data-bgpositionend="undefined"
                data-bgposition="undefined" data-kenburns="undefined" data-easeme="undefined" data-bgfit="undefined"
                data-bgfitend="undefined" data-owidth="undefined" data-oheight="undefined">
                <div class="tp-bgimg defaultimg" data-lazyload="undefined" data-bgfit="cover"
                  data-bgposition="center center" data-bgrepeat="no-repeat" data-lazydone="undefined"
                  src="<?php echo e(asset("image/banner/$b->thumbnail")); ?>" data-src="<?php echo e(asset("image/banner/$b->thumbnail")); ?>"
                  style="
                    background-color: rgba(0, 0, 0, 0);
                    background-repeat: no-repeat;
                    background-image: url('<?php echo e(asset("image/banner/$b->thumbnail")); ?>');
                    background-size: cover;
                    background-position: center center;
                    width: 100%;
                    height: 100%;
                    opacity: 1;
                    visibility: inherit;
                  "></div>
              </div>
            </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </ul>
        </div>
      </div>
      <div class="tp-bannertimer"></div>
    </div>
  </div>
  <!--slider-->
</div>
<div class="container">
  <div id="content" class="space-top-none">
    <div class="main-content">
      <div class="space60">&nbsp;</div>
      <div class="row">
        <div class="col-sm-12">
          <div class="filter">
            <h6>Chọn mức giá:</h6>
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
            <h4>Sản phẩm mới</h4>
            <div class="beta-products-details">
              <div class="space40">&nbsp;</div>
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
                  <div class="space20">&nbsp;</div>
                  <div class="single-item-caption">
                    <p class="single-item-title"><b style="color: green"><?php echo e($p->status); ?></b></p>
                    <a class="add-to-cart pull-left" href="<?php echo e(route('cart.add', $p->id)); ?>"><i
                        class="fa fa-shopping-cart"></i></a>
                    <a class="beta-btn primary" href="<?php echo e(url("product/$p->id")); ?>">Chi tiết<i
                        class="fa fa-chevron-right"></i></a>
                    <div class="clearfix"></div>
                  </div>
                </div>
              </div>
              <?php if($i==4): ?>
              <div class="space80">&nbsp;</div>
              <?php endif; ?>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            <div class="space80">&nbsp;</div>
          </div>
          <!-- .beta-products-list -->

          <div class="space50">&nbsp;</div>

          <div class="beta-products-list">
            <h4>Có thể bạn quan tâm</h4>
            <div class="beta-products-details">
              <div class="space40">&nbsp;</div>
            </div>
            <div class="row">
              <?php
              $i=0;
              ?>
              <?php $__currentLoopData = $randoms; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $r): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <?php
              $i++;
              ?>
              <div class="col-sm-3">
                <div class="single-item">
                  <div class="single-item-header">
                    <a href="<?php echo e(url("product/$r->id")); ?>"><img src="<?php echo e(asset("image/product/$r->thumbnail")); ?>"
                        alt="" /></a>
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
                    <a class="add-to-cart pull-left" href="<?php echo e(route('cart.add', $r->id)); ?>"><i
                        class="fa fa-shopping-cart"></i></a>
                    <a class="beta-btn primary" href="<?php echo e(url("product/$r->id")); ?>">Chi tiết<i
                        class="fa fa-chevron-right"></i></a>
                    <div class="clearfix"></div>
                  </div>
                </div>
              </div>
              <?php if($i%4==0): ?>
              <div class="space80">&nbsp;</div>
              <?php endif; ?>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.theme', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\watch_store\project\resources\views/theme/home.blade.php ENDPATH**/ ?>