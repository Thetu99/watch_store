

<?php $__env->startSection('content'); ?>
<div class="inner-header">
  <div class="container">
    <div class="pull-left">
      <h6 class="inner-title">Đặt hàng</h6>
    </div>
    <div class="pull-right">
      <div class="beta-breadcrumb">
        <a href="<?php echo e(url('/')); ?>" class="home fa fa-home"> Trang chủ</a> / <span>Đặt hàng</span>
      </div>
    </div>
    <div class="clearfix"></div>
  </div>
</div>

<div class="container">
  <div id="content">
    <div class="row">
      <div class="col-sm-12">
        <div id="inform">
          <h6>Bạn đã đặt hàng thành công</h6>
          <hr>
          <a href="<?php echo e(url('/')); ?>">Quay lại</a>
        </div>
      </div>
    </div>
  </div> <!-- #content -->
</div> <!-- .container -->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.theme', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\watch_store\project\resources\views/theme/success.blade.php ENDPATH**/ ?>