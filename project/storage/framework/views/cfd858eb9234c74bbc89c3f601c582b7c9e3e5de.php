
<?php $__env->startSection('content'); ?>
<div id="content" class="container-fluid">
  <div class="card">
    <div class="card-header font-weight-bold">
      Cập nhật Banner
    </div>
    <div class="card-body">
      <form action="<?php echo e(url('admin/banner/update', $banners->id)); ?>" method="POST" enctype="multipart/form-data" autocomplete="off">
        <?php echo csrf_field(); ?>
        <div class="form-group">
          <label for="name">Tên Banner</label>
        <input class="form-control" type="text" name="name" id="name" value="<?php echo e($banners->name); ?>" required>
        </div>        

        <button type="submit" name="btn-add" value="Thêm mới" class="btn btn-primary">Cập nhật</button>
      </form>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\watch_store\project\resources\views/admin/banner/edit.blade.php ENDPATH**/ ?>