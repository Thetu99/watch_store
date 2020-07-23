
<?php $__env->startSection('content'); ?>
<div id="content" class="container-fluid">
  <div class="card">

    <?php if(session('status')): ?>
    <div class="alert bg-success text-white">
      <?php echo e(session('status')); ?>

    </div>
    <?php endif; ?>

    <div class="card-header font-weight-bold d-flex justify-content-between align-items-center">
      <h5 class="m-0">Danh sách sản phẩm</h5>
      <div class="form-search form-inline">
        <form action="#" method="GET">
          <input type="text" name="keyword" value="<?php echo e(request()->input('keyword')); ?>" class="form-control form-search"
            placeholder="Tìm kiếm">
          <input type="submit" name="btn-search" value="Tìm kiếm" class="btn btn-primary">
        </form>
      </div>
    </div>
    <div class="card-body">
      <div class="analytic">
        <a href="<?php echo e(request()->fullUrlWithQuery(['status'=>'exist'])); ?>" class="text-primary">Hiện có <span
            class="text-muted">(<?php echo e($count[0]); ?>)</span></a>
        <a href="<?php echo e(request()->fullUrlWithQuery(['status'=>'trash'])); ?>" class="text-primary">Thùng rác <span
            class="text-muted">(<?php echo e($count[1]); ?>)</span></a>
      </div>
      <form action="<?php echo e(url('admin/product/action')); ?>" method="">
        <div class="form-action form-inline py-3">
          <select name="act" class="form-control mr-1" id="">
            <option>Chọn</option>
            <?php $__currentLoopData = $list_act; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k => $act): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($k); ?>"><?php echo e($act); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </select>
          <input type="submit" name="btn-search" value="Áp dụng" class="btn btn-primary">
        </div>
        <?php echo e($products->links()); ?>

        <table class="table table-striped table-checkall">
          <thead>
            <tr>
              <th><input type="checkbox" name="checkall"></th>
              <th scope="col">STT</th>
              <th scope="col">Tên</th>
              <th scope="col">Thương hiệu</th>
              <th scope="col">Mô tả</th>
              <th scope="col">Giá tiền</th>
              <th scope="col">Ảnh</th>
              <th scope="col">Tình trạng</th>
              <th scope="col">Ngày thêm</th>
              <th scope="col">Ngày cập nhật</th>
              <th scope="col" style="width: 100px">Tác vụ</th>
            </tr>
          </thead>
          <tbody>
            <?php if($products->total()>0): ?>
            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
              <td>
                <input type="checkbox" name="list_check[]" value="<?php echo e($p->id); ?>">
              </td>
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
                <a href="<?php echo e(route('edit_product', $p->id)); ?>" class="btn btn-success btn-sm rounded-0 text-white"
                  type="button" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i></a>

                <a href="<?php echo e(route('delete_product', $p->id)); ?>" onclick="return confirm('Bạn có chắc chắn muốn xóa?')"
                  class="btn btn-danger btn-sm rounded-0 text-white" type="button" data-toggle="tooltip"
                  data-placement="top" title="Delete"><i class="fa fa-trash"></i></a>

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
      <?php echo e($products->links()); ?>

    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\watch_store\project\resources\views/admin/product/list.blade.php ENDPATH**/ ?>