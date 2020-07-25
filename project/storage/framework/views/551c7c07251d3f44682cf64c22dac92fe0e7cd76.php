
<?php $__env->startSection('content'); ?>
<div id="content" class="container-fluid">
  <div class="card">

    <?php if(session('status')): ?>
    <div class="alert bg-success text-white">
      <?php echo e(session('status')); ?>

    </div>
    <?php endif; ?>

    <div class="card-header font-weight-bold d-flex justify-content-between align-items-center">
      <h5 class="m-0">BÌNH LUẬN MỚI</h5>
      <div class="form-search form-inline">
        <form action="" method="GET" autocomplete="off">
          <input type="search" name="keyword" class="form-control form-search" placeholder="Tìm kiếm">
          <button type="submit" class="btn btn-primary">Tìm kiếm</button>
        </form>
      </div>
    </div>
    <div class="card-body">
      <table class="table table-striped table-checkall">
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
          <?php if($comments->total()>0): ?>
          <?php $__currentLoopData = $comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <tr>
            <th><?php echo e($comments->firstItem() + $key); ?></th>
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
              <a href="<?php echo e(route('comment.delete', $c->id)); ?>" onclick="return confirm('Bạn có chắc chắn muốn xóa?')"
                class="btn btn-danger btn-sm">Xóa</a>
            </td>
          </tr>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          <?php else: ?>
          <tr>
            <td colspan="7" class="bg-white">Không tìm thấy bản ghi</td>
          </tr>
          <?php endif; ?>

        </tbody>
      </table>
      </form>
      <?php echo e($comments->links()); ?>

    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\watch_store\project\resources\views/admin/comment/list.blade.php ENDPATH**/ ?>