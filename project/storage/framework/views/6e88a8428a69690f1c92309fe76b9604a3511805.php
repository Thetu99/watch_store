

<?php $__env->startSection('content'); ?>
<div class="rev-slider">
  <div class="fullwidthbanner-container">
    <div class="fullwidthbanner">
      <div class="bannercontainer">
        <div class="banner">
          <ul>
            <!-- THE FIRST SLIDE -->
            <li data-transition="boxfade" data-slotamount="20" class="active-revslide" style="
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
                  src="<?php echo e(asset('assets/dest/images/thumbs/1.png')); ?>"
                  data-src="<?php echo e(asset('assets/dest/images/thumbs/1.png')); ?>" style="
                    background-color: rgba(0, 0, 0, 0);
                    background-repeat: no-repeat;
                    background-image: url('<?php echo e(asset('assets/dest/images/thumbs/1.png')); ?>');
                    background-size: cover;
                    background-position: center center;
                    width: 100%;
                    height: 100%;
                    opacity: 1;
                    visibility: inherit;
                  "></div>
              </div>
            </li>
            <li data-transition="boxfade" data-slotamount="20" class="active-revslide" style="
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
                  src="<?php echo e(asset('assets/dest/images/thumbs/2.png')); ?>"
                  data-src="<?php echo e(asset('assets/dest/images/thumbs/2.png')); ?>" style="
                    background-color: rgba(0, 0, 0, 0);
                    background-repeat: no-repeat;
                    background-image: url('<?php echo e(asset('assets/dest/images/thumbs/2.png')); ?>');
                    background-size: cover;
                    background-position: center center;
                    width: 100%;
                    height: 100%;
                    opacity: 1;
                    visibility: inherit;
                  "></div>
              </div>
            </li>

            <li data-transition="boxfade" data-slotamount="20" class="active-revslide" style="
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
                  src="<?php echo e(asset('assets/dest/images/thumbs/3.png')); ?>"
                  data-src="<?php echo e(asset('assets/dest/images/thumbs/3.png')); ?>" style="
                    background-color: rgba(0, 0, 0, 0);
                    background-repeat: no-repeat;
                    background-image: url('<?php echo e(asset('assets/dest/images/thumbs/3.png')); ?>');
                    background-size: cover;
                    background-position: center center;
                    width: 100%;
                    height: 100%;
                    opacity: 1;
                    visibility: inherit;
                  "></div>
              </div>
            </li>
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
            <h4><?php $__currentLoopData = $title; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $t): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <?php echo e($t); ?>

              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?></h4>
            <div class="beta-products-details">
              
              <div class="clearfix"></div>
            </div>

            <div class="row">
              <?php
              $i=0;
              ?>
              <?php if($filter->total()>0): ?>
              <?php $__currentLoopData = $filter; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $f): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <?php
              $i++;
              ?>
              <div class="col-sm-3">
                <div class="single-item">
                  <div class="single-item-header">
                    <a href="<?php echo e(url("product/$f->id")); ?>">
                      <img src="<?php echo e(asset("image/product/$f->thumbnail")); ?>" />
                    </a>
                  </div>
                  <div class="single-item-body">
                    <p class="single-item-title"><b><?php echo e($f->name); ?></b></p>
                    <p class="single-item-price">
                      <span class="color-gray"><?php echo e(number_format($f->price, 0, '', '.')); ?>đ</span>
                    </p>
                  </div>
                  <div class="single-item-caption">
                    <a class="add-to-cart pull-left" href="<?php echo e(route('cart.add', $f->id)); ?>"><i
                        class="fa fa-shopping-cart"></i></a>
                    <a class="beta-btn primary" href="<?php echo e(url("product/$f->id")); ?>">Chi tiết<i
                        class="fa fa-chevron-right"></i></a>
                    <div class="clearfix"></div>
                  </div>
                </div>
              </div>
              <?php if($i%4==0): ?>
              <div class="space40">&nbsp;</div>
              <?php endif; ?>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              <?php else: ?>
              <div class="col-sm-12">
                <div class="space50">&nbsp;</div>
                <div class="filter">
                  <p>Không tìm thấy sản phẩm</p>
                </div>                
              </div>              
              <?php endif; ?>
            </div>
          </div>
          <!-- .beta-products-list -->
          <div class="space50">&nbsp;</div>
        </div>
        <!-- .beta-products-list -->
      </div>
    </div>
    <!-- end section with sidebar and main content -->
  </div>
  <!-- .main-content -->
</div>
<!-- #content -->
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.theme', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\watch_store\project\resources\views/theme/filter.blade.php ENDPATH**/ ?>