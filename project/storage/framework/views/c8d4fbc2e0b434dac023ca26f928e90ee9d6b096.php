
<?php $__env->startSection('content'); ?>
<div class="container-fluid py-4">
  
  <!-- end analytic  -->
  <div class="card">
    <div class="card-header font-weight-bold">
      ĐƠN HÀNG MỚI
    </div>
    <div class="card-body">
      <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">STT</th>
            <th scope="col">Khách hàng</th>
            <th scope="col">Giới tính</th>
            <th scope="col">Số điện thoại</th>
            <th scope="col">Email</th>
            <th scope="col">Địa chỉ</th>
            <th scope="col">Ghi chú</th>
            <th scope="col">Thời gian</th>
            <th scope="col" style="width: 100px">Tác vụ</th>
          </tr>
        </thead>
        <tbody>
          <?php $__currentLoopData = $customers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <tr>
            <th scope="row"><?php echo e($customers->firstItem() + $key); ?></th>
            <td><?php echo e($c->name); ?></td>
            <td><?php echo e($c->gender); ?></td>
            <td><?php echo e($c->phone); ?></td>
            <td><?php echo e($c->email); ?></td>
            <td><?php echo e($c->address); ?></td>
            <td><?php echo e($c->note); ?></td>
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
      
      <?php echo e($customers->links()); ?>

    </div>
  </div>

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\watch_store\project\resources\views/admin/dashboard.blade.php ENDPATH**/ ?>