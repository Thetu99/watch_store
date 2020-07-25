
<?php $__env->startSection('content'); ?>
<div id="content" class="container-fluid">
  <div class="card">

    <?php if(session('status')): ?>
    <div class="alert bg-success text-white">
      <?php echo e(session('status')); ?>

    </div>
    <?php endif; ?>

    <div class="card-header font-weight-bold d-flex justify-content-between align-items-center">
      <h5 class="m-0">ĐƠN HÀNG MỚI</h5>
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
            <th>STT</th>
            <th>Khách hàng</th>
            <th>Giới tính</th>
            <th>Số điện thoại</th>
            <th>Email</th>
            <th>Địa chỉ</th>
            <th>Ghi chú</th>
            <th>Thanh toán</th>
            <th>Thời gian</th>
            <th style="width: 132px">Tác vụ</th>
          </tr>
        </thead>
        <tbody>
          <?php if($customers->total()>0): ?>
          <?php $__currentLoopData = $customers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <tr>
            <th scope="row"><?php echo e($customers->firstItem() + $key); ?></th>
            <td><?php echo e($c->name); ?></td>
            <td><?php echo e($c->gender); ?></td>
            <td><?php echo e($c->phone); ?></td>
            <td><?php echo e($c->email); ?></td>
            <td><?php echo e($c->address); ?></td>
            <td><?php echo e($c->note); ?></td>
            <td><?php echo e($c->payment_method); ?></td>
            <td><?php echo e(date("G:i j-n-Y", strtotime($c->created_at))); ?></td>
            <td>
              <a href="<?php echo e(route('order.detail', $c->id)); ?>" class="btn btn-success btn-sm">Chi tiết</a>

              <a href="<?php echo e(route('order.delete', $c->id)); ?>" onclick="return confirm('Bạn có chắc chắn muốn xóa?')"
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
      <?php echo e($customers->links()); ?>

    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\watch_store\project\resources\views/admin/dashboard.blade.php ENDPATH**/ ?>