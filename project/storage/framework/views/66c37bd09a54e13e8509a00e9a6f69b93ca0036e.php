
<?php $__env->startSection('content'); ?>
<div id="content" class="container-fluid">
  <div class="card">

    <?php if(session('status')): ?>
    <div class="alert bg-success text-white">
      <?php echo e(session('status')); ?>

    </div>
    <?php endif; ?>

    <div class="card-header font-weight-bold d-flex justify-content-between align-items-center">
      <h5 class="m-0">Sản phẩm nổi bật</h5>
      <div class="form-search form-inline">
        <form method="GET" autocomplete="off">
          <input type="search" name="keyword" class="form-control form-search" placeholder="Tên sản phẩm">
          <button type="submit" class="btn btn-primary">Tìm kiếm</button>
        </form>
      </div>
    </div>
    <div class="card-body">
      <a href="<?php echo e(url('admin/product/hot/list')); ?>" class="btn btn-primary">Thêm vào danh sách</a>
      <table class="table table-striped table-checkall">
        <thead>
          <tr>
            <th>STT</th>
            <th>Tên</th>
            <th>Thương hiệu</th>
            <th>Mô tả</th>
            <th>Giá tiền</th>
            <th>Ảnh</th>
            <th>Tình trạng</th>
            <th>Ngày thêm</th>
            <th>Ngày cập nhật</th>
            <th style="width: 115px">Tác vụ</th>
          </tr>
        </thead>
        <tbody>
          <?php if($products->total()>0): ?>
          <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <tr>
            <td><?php echo e($products->firstItem() + $key); ?></td>
            <td><?php echo e($p->name); ?></td>
            <td><?php echo e($p->brand); ?></td>
            <td><?php echo $p->content; ?></td>
            <td><?php echo e(number_format($p->price,0,'','.')); ?>đ</td>
            <td>
              <a href="<?php echo e(asset("image/product/$p->thumbnail")); ?>" target="_blank">
                <img src="<?php echo e(asset("image/product/$p->thumbnail")); ?>" width="50px" />
              </a>
            </td>
            <td><?php echo e($p->status); ?></td>
            <td><?php echo e(date("G:i j-n-Y", strtotime($p->created_at))); ?></td>
            <td><?php echo e(date("G:i j-n-Y", strtotime($p->updated_at))); ?></td>
            <td>

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
      <?php echo e($products->links()); ?>

    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\watch_store\project\resources\views/admin/product/hot/add.blade.php ENDPATH**/ ?>