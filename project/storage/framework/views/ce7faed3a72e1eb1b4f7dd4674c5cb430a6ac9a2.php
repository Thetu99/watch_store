
<?php $__env->startSection('content'); ?>
<div id="content" class="container-fluid">
  <div class="card">
    <div class="card-header font-weight-bold">
      Cập nhật sản phẩm
    </div>
    <div class="card-body">

      
      <form action="<?php echo e(route('update_product', $product->id)); ?>" method="POST" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <div class="form-group">
          <label for="name">Tên sản phẩm</label>
          <input class="form-control" type="text" name="name" id="name" value="<?php echo e($product->name); ?>" required>
        </div>

        <div class="form-group">
          <label for="brand">Thương hiệu</label>
          <select name="brand" id="brand" class="form-control">
            <?php $__currentLoopData = $brands; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $b): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($b->name); ?>" <?php if($b->name==$product->brand): ?>
              <?php echo e('selected'); ?>

              <?php endif; ?>><?php echo e($b->name); ?>

            </option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </select>
        </div>

        <div class="form-group">
          <label for="price">Giá tiền</label>
          <input class="form-control" type="text" name="price" id="price" value="<?php echo e($product->price); ?>" required>
        </div>

        <div class="form-group">
          <label for="content">Mô tả</label>
          <textarea class="form-control" name="content" id="content" required ><?php echo e($product->content); ?></textarea>
        </div>

        <div class="form-group">
          <label>Tình trạng</label><br>
          
          <input type="radio" name="status" id="conhang" value="Còn hàng" <?php if($product->status=='Còn hàng'): ?>
          checked
          <?php endif; ?>>
          <label for="conhang">Còn hàng</label>&nbsp;

          <input type="radio" name="status" id="hethang" value="Hết hàng" <?php if($product->status=='Hết hàng'): ?>
          checked
          <?php endif; ?>>
          <label for="hethang">Hết hàng</label>
        </div>

        <button type="submit" name="btn-add" value="Thêm mới" class="btn btn-primary">Cập nhật</button>
      </form>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\watch_store\project\resources\views/admin/product/edit.blade.php ENDPATH**/ ?>