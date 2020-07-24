
<?php $__env->startSection('content'); ?>
<div class="container-fluid py-4">
  <div class="card">
    <div class="card-header font-weight-bold">
      BÌNH LUẬN MỚI
    </div>
    <div class="card-body">
      <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">STT</th>
            <th scope="col">Tên</th>
            <th scope="col">Nội dung</th>
            <th scope="col">Sản phẩm</th>
            <th scope="col">Hình ảnh</th>
            <th scope="col">Thời gian</th>
            <th scope="col" style="width: 100px">Tác vụ</th>
          </tr>
        </thead>
        <tbody>
          <?php $__currentLoopData = $comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <tr>
            <th scope="row"><?php echo e($comments->firstItem() + $key); ?></th>
            <td><?php echo e($c->name); ?></td>
            <td><?php echo e($c->content); ?></td>
            <td><?php echo e($c->product->name); ?></td>
            <td>
              <a target="blank" href="<?php echo e(asset("image/product/{$c->product->thumbnail}")); ?>">
                <img width="50px" src="<?php echo e(asset("image/product/{$c->product->thumbnail}")); ?>">
              </a>
            </td>
            <td><?php echo e(date("G:i j-n-Y", strtotime($c->created_at))); ?></td>
            <td>
              <a href="<?php echo e(route('order.detail', $c->id)); ?>" class="btn btn-success btn-sm rounded-0 text-white" type="button" data-toggle="tooltip"
                data-placement="top" title="Chi tiết">
                <i class="fa fa-file-alt"></i>
              </a>

              <a href="<?php echo e(route('order.delete', $c->id)); ?>" onclick="return confirm('Bạn có chắc chắn muốn xóa?')"
                class="btn btn-danger btn-sm rounded-0 text-white" type="button" data-toggle="tooltip"
                data-placement="top" title="Xóa">
                <i class="fa fa-trash"></i>
              </a>
            </td>
          </tr>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </tbody>
      </table>
      <?php echo e($comments->links()); ?>

    </div>
  </div>

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\watch_store\project\resources\views/admin/comment/list.blade.php ENDPATH**/ ?>