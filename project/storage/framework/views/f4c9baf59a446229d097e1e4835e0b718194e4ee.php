
<?php $__env->startSection('content'); ?>
<div id="content" class="container-fluid">
  <div class="card">
    <div class="card-header font-weight-bold">
      Thêm sản phẩm
    </div>
    <div class="card-body">

      
      <form action="<?php echo e(url('admin/product/store')); ?>" method="POST" enctype="multipart/form-data" autocomplete="off">
      <?php echo csrf_field(); ?>
      <div class="form-group">
        <label for="name">Tên sản phẩm</label>
        <input class="form-control" type="text" name="name" id="name" required>
      </div>

      <div class="form-group">
        <label for="brand">Thương hiệu</label>
        <select name="brand" id="brand" class="form-control" required>
          <option value="" disabled selected>--Chọn--</option>
          <?php $__currentLoopData = $brands; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $b): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <option value="<?php echo e($b->name); ?>">
            <?php echo e($b->name); ?>

          </option>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
      </div>
      
      <div class="form-group">
        <label for="price">Giá tiền</label>
        <input class="form-control" type="text" name="price" id="price" required>
      </div>

      <div class="form-group">
        <label for="content">Mô tả</label>
        <textarea class="form-control" name="content" id="content" rows="5"></textarea>
      </div>

      <div class="form-group">
        <label for="thumbnail">Ảnh</label>
        <input class="form-control-file" type="file" name="thumbnail" id="thumbnail" required>
      </div>
      
      <button type="submit" name="btn-add" value="Thêm mới" class="btn btn-primary">Thêm mới</button>
      </form>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\watch_store\project\resources\views/admin/product/add.blade.php ENDPATH**/ ?>