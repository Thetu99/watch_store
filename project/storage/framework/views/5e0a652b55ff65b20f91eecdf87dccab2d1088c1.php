
<?php $__env->startSection('content'); ?>
<div id="content" class="container-fluid">
  <div class="card">

    <?php if(session('status')): ?>
    <div class="alert bg-success text-white">
      <?php echo e(session('status')); ?>

    </div>
    <?php endif; ?>

    <div class="card-header font-weight-bold d-flex justify-content-between align-items-center">
      <h5 class="m-0">Danh sách thương hiệu</h5>
      <div class="form-search form-inline">
        <form method="GET" autocomplete="off">
          <input type="search" name="keyword" class="form-control form-search" placeholder="Tìm kiếm">
          <button type="submit" class="btn btn-primary">Tìm kiếm</button>
        </form>
      </div>
    </div>
    <div class="cart-body">
      <a href="<?php echo e(url('admin/brand/add')); ?>" class="btn btn-primary">Thêm mới</a>
      <table class="table table-striped">
        <thead>
          <th>STT</th>
          <th>Tên thương hiệu</th>
          <th>Hình ảnh</th>
          <th style="width: 115px">Tác vụ</th>
        </thead>

        <tbody>
          <?php if($brands->total()>0): ?>
          <?php $__currentLoopData = $brands; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k => $b): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <tr>
            <td><?php echo e($brands->firstItem() +$k); ?></td>
            <td><?php echo e($b->name); ?></td>
            <td><a target="blank" href="<?php echo e(asset("image/brand/$b->thumbnail")); ?>"><img width="200px"
                  src="<?php echo e(asset("image/brand/$b->thumbnail")); ?>"></a></td>
            <td>
              <a href="<?php echo e(route('brand.edit', $b->id)); ?>" class="btn btn-success btn-sm">Sửa</a>

              <a href="<?php echo e(route('brand.delete', $b->id)); ?>" onclick="return confirm('Bạn có chắc chắn muốn xóa?')"
                class="btn btn-danger btn-sm">Xóa</a>
            </td>
          </tr>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          <?php else: ?>
          <tr>
            <td colspan="4" class="bg-white">Không tìm thấy bản ghi</td>
          </tr>
          <?php endif; ?>
        </tbody>
      </table>
      <?php echo e($brands->links()); ?>

    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\watch_store\project\resources\views/admin/brand/list.blade.php ENDPATH**/ ?>