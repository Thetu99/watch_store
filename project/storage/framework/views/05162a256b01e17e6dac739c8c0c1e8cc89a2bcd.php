
<?php $__env->startSection('content'); ?>
<div class="container-fluid py-4">
  <div class="card">
    <div class="card-header font-weight-bold">
      CHI TIẾT ĐƠN HÀNG
    </div>
    <div class="card-body">
      <table class="table table-striped">
        <thead>
          <tr>
            <th colspan="2">Thông tin khách hàng</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Tên khách hàng</td>
            <td><?php echo e($customers->name); ?></td>
          </tr>
          <tr>
            <td>Giới tính</td>
            <td><?php echo e($customers->gender); ?></td>
          </tr>
          <tr>
            <td>Ngày đặt hàng</td>
            <td><?php echo e(date("G:i j-n-Y", strtotime($customers->created_at))); ?></td>
          </tr>
          <tr>
            <td>Số điện thoại</td>
            <td><?php echo e($customers->phone); ?></td>
          </tr>
          <tr>
            <td>Địa chỉ</td>
            <td><?php echo e($customers->address); ?></td>
          </tr>
          <tr>
            <td>Email</td>
            <td><?php echo e($customers->email); ?></td>
          </tr>
          <tr>
            <td>Thanh toán</td>
            <td><?php echo e($customers->payment_method); ?></td>
          </tr>
          <tr>
            <td>Ghi chú</td>
            <td><?php echo e($customers->note); ?></td>
          </tr>
        </tbody>
      </table>

      <table class="table table-striped">
        <thead>
          <th>STT</th>
          <th>Tên sản phẩm</th>
          <th>Hình ảnh</th>
          <th>Đơn giá</th>
          <th>Số lượng</th>
          <th>Tổng tiền</th>
        </thead>
        <tbody>
          <?php
          $total = 0;
          ?>
          <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $o): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <tr>
            <td><?php echo e($orders->firstItem() + $key); ?></td>
            <td><?php echo e($o->product_name); ?></td>
            <td>
              <a target="blank" href="<?php echo e(asset("image/product/$o->product_thumbnail")); ?>">
                <img src="<?php echo e(asset("image/product/$o->product_thumbnail")); ?>" width="50px">
              </a>
            </td>
            <td><?php echo e(number_format($o->product_price, 0, '', '.')); ?>đ</td>
            <td><?php echo e($o->product_qty); ?></td>
            <td><?php echo e(number_format($o->product_price * $o->product_qty, 0, '', '.')); ?>đ</td>
          </tr>
          <?php
          $total += $o->product_price * $o->product_qty;
          ?>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          <tr>
            <th colspan="5">Tổng đơn hàng:</th>
            <td style="color: red; font-weight: bold"><?php echo e(number_format($total, 0, '', '.')); ?>đ</td>
          </tr>
        </tbody>
      </table>
      
    </div>
  </div>

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\watch_store\project\resources\views/admin/order/detail.blade.php ENDPATH**/ ?>