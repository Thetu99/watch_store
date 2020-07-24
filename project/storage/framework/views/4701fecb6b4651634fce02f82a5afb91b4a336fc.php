
<?php $__env->startSection('content'); ?>
<div id="content" class="container-fluid">
  <div class="card">
    <div class="card-header font-weight-bold">
      Thêm Banner
    </div>
    <div class="card-body">
      <form action="<?php echo e(url('admin/banner/store')); ?>" method="POST" enctype="multipart/form-data" autocomplete="off">
        <?php echo csrf_field(); ?>
        <div class="form-group">
          <label for="name">Tên Banner</label>
          <input class="form-control" type="text" name="name" id="name" required>
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
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\watch_store\project\resources\views/admin/banner/add.blade.php ENDPATH**/ ?>