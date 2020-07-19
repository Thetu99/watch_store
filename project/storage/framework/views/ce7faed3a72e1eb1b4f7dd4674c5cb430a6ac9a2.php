
<?php $__env->startSection('content'); ?>
<div id="content" class="container-fluid">
  <div class="card">
    <div class="card-header font-weight-bold">
      Cập nhật sản phẩm
    </div>
    <div class="card-body">

      <?php echo Form::open(['route'=> ['update_product', $product->id], 'method'=>'post', 'files'=> true,
      'autocomplete'=>'off']); ?>


      <div class="form-group">
        <?php echo Form::label('name', 'Tên sản phẩm'); ?>

        <?php echo Form::text('name', $product->name, ['class'=>'form-control', 'required']); ?>

      </div>

      <div class="form-group">
        <?php echo Form::label('', 'Thương hiệu'); ?><br>

        <?php echo Form::radio('brand', $product->brand, true, ['id'=> $product->brand, 'required']); ?>

        <?php echo Form::label($product->brand, $product->brand); ?> &nbsp;

        <?php echo Form::radio('brand', 'Orient', '', ['id'=>'orient', 'required']); ?>

        <?php echo Form::label('orient', 'Orient'); ?> &nbsp;

        <?php echo Form::radio('brand', 'Casio', '', ['id'=>'casio', 'required']); ?>

        <?php echo Form::label('casio', 'Casio'); ?> &nbsp;

        <?php echo Form::radio('brand', 'Obaku', '', ['id'=>'obaku', 'required']); ?>

        <?php echo Form::label('obaku', 'Obaku'); ?> &nbsp;

        <?php echo Form::radio('brand', 'Tissot', '', ['id'=>'tissot', 'required']); ?>

        <?php echo Form::label('tissot', 'Tissot'); ?> &nbsp;

        <?php echo Form::radio('brand', 'Fossil', '', ['id'=>'fossil', 'required']); ?>

        <?php echo Form::label('fossil', 'Fossil'); ?>

      </div>

      <div class="form-group">
        <?php echo Form::label('price', 'Giá tiền'); ?>

        <?php echo Form::text('price', $product->price, ['class'=>'form-control', 'required']); ?>

      </div>

      <div class="form-group">
        <?php echo Form::label('Mô tả'); ?><br>
        <?php echo Form::textarea('content', $product->content, ['class'=>'form-control']); ?>

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

      <?php echo Form::submit('Cập nhật', ['class'=> 'btn btn-primary']); ?>


      <?php echo Form::close(); ?>

      
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\watch_store\project\resources\views/admin/product/edit.blade.php ENDPATH**/ ?>