
<?php $__env->startSection('content'); ?>
<div id="content" class="container-fluid">
  <div class="card">
    <div class="card-header font-weight-bold">
      Thêm sản phẩm
    </div>
    <div class="card-body">

      <?php echo Form::open(['url'=>'admin/product/store', 'method'=>'post', 'files'=> true, 'autocomplete'=>'off']); ?>


      <div class="form-group">
        <?php echo Form::label('name', 'Tên sản phẩm'); ?>

        <?php echo Form::text('name', '', ['class'=>'form-control', 'required']); ?>

      </div>

      <div class="form-group">
        <?php echo Form::label('', 'Thương hiệu'); ?><br>
        <?php echo Form::radio('brand', 'Orient', '', ['id'=>'Orient', 'required']); ?>

        <?php echo Form::label('Orient', 'Orient'); ?> &nbsp;
        <?php echo Form::radio('brand', 'Casio', '', ['id'=>'Casio', 'required']); ?>

        <?php echo Form::label('Casio', 'Casio'); ?> &nbsp;
        <?php echo Form::radio('brand', 'Obaku', '', ['id'=>'Obaku', 'required']); ?>

        <?php echo Form::label('Obaku', 'Obaku'); ?> &nbsp;
        <?php echo Form::radio('brand', 'Tissot', '', ['id'=>'Tissot', 'required']); ?>

        <?php echo Form::label('Tissot', 'Tissot'); ?> &nbsp;
        <?php echo Form::radio('brand', 'Fossil', '', ['id'=>'Fossil', 'required']); ?>

        <?php echo Form::label('Fossil', 'Fossil'); ?>

      </div>

      <div class="form-group">
        <?php echo Form::label('price', 'Giá tiền'); ?>

        <?php echo Form::text('price', '', ['class'=>'form-control', 'required']); ?>

      </div>

      <div class="form-group">
        <?php echo Form::label('Mô tả'); ?><br>
        <?php echo Form::textarea('content', '', ['class'=>'form-control']); ?>

      </div>
      <?php $__errorArgs = ['content'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
      <small class="text-danger"><?php echo e($message); ?></small>
      <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

      <div class="form-group">
        <?php echo Form::label('Ảnh'); ?><br>
        <?php echo Form::file('thumbnail', ['class'=>'form-control-file', 'type'=>'file']); ?>

      </div>

      <?php echo Form::submit('Thêm mới', ['class'=> 'btn btn-primary']); ?>


      <?php echo Form::close(); ?>

      
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\watch_store\project\resources\views/admin/product/add.blade.php ENDPATH**/ ?>