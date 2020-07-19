
<?php $__env->startSection('content'); ?>
<div id="content" class="container-fluid">
  <div class="card">

    <?php if(session('status')): ?>
    <div class="alert bg-success text-white">
      <?php echo e(session('status')); ?>

    </div>
    <?php endif; ?>

    <div class="card-header font-weight-bold d-flex justify-content-between align-items-center">
      <h5 class="m-0">Danh sách thành viên</h5>
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
        <a href="<?php echo e(request()->fullUrlWithQuery(['status'=>'active'])); ?>" class="text-primary">Kích hoạt<span
            class="text-muted">(<?php echo e($count[0]); ?>)</span></a>
        <a href="<?php echo e(request()->fullUrlWithQuery(['status'=>'trash'])); ?>" class="text-primary">Vô hiệu hóa<span
            class="text-muted">(<?php echo e($count[1]); ?>)</span></a>
      </div>
      <form action="<?php echo e(url('admin/user/action')); ?>" method="">
        <div class="form-action form-inline py-3">
          <select name="act" class="form-control mr-1" id="">
            <option>Chọn</option>
            <?php $__currentLoopData = $list_act; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k => $act): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($k); ?>"><?php echo e($act); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </select>
          <input type="submit" name="btn-search" value="Áp dụng" class="btn btn-primary">
        </div>
        <table class="table table-striped table-checkall">
          <thead>
            <tr>
              <th><input type="checkbox" name="checkall"></th>
              <th scope="col">STT</th>
              <th scope="col">Họ tên</th>
              <th scope="col">Email</th>
              <th scope="col">Quyền</th>
              <th scope="col">Ngày tạo</th>
              <th scope="col">Ngày sửa đổi</th>
              <th scope="col" style="width: 100px">Tác vụ</th>
            </tr>
          </thead>
          <tbody>
            <?php if($users->total()>0): ?>
            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
              <td>
                <input type="checkbox" name="list_check[]" value="<?php echo e($user->id); ?>">
              </td>
              <td scope="row"><?php echo e($users->firstItem() + $key); ?></td>
              <td><?php echo e($user->name); ?></td>
              <td><?php echo e($user->email); ?></td>
              <td>Admintrator</td>
              <td><?php echo e(date("G:i j-n-Y", strtotime($user->created_at))); ?></td>
              <td><?php echo e(date("G:i j-n-Y", strtotime($user->updated_at))); ?></td>
              <td>
                <a href="<?php echo e(route('user.edit', $user->id)); ?>" class="btn btn-success btn-sm rounded-0 text-white"
                  type="button" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i></a>
                <?php if(Auth::id()!=$user->id): ?>
                <a href="<?php echo e(route('delete_user', $user->id)); ?>" onclick="return confirm('Bạn có chắc chắn muốn xóa?')"
                  class="btn btn-danger btn-sm rounded-0 text-white" type="button" data-toggle="tooltip"
                  data-placement="top" title="Delete"><i class="fa fa-trash"></i></a>
                <?php endif; ?>
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
      <?php echo e($users->links()); ?>

    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\watch_store\project\resources\views/admin/user/list.blade.php ENDPATH**/ ?>