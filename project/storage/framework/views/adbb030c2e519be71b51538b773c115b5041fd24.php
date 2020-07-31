

<?php $__env->startSection('content'); ?>

<div class="inner-header">
  <div class="container">
    <div class="pull-left">
      <h4 class="inner-title">Giỏ hàng</h4>
    </div>

    <div class="pull-right">
      <div class="beta-breadcrumb font-large">
        <a href="<?php echo e(url('home')); ?>" class="home fa fa-home"> Trang chủ</a> / <span>Giỏ hàng</span>
      </div>
    </div>
    <div class="clearfix"></div>
  </div>
</div>

<div class="container">
  <div id="content">

    <div class="table-responsive">
      <p>Hiện tại có<b style="color: red"> <?php echo e(Cart::count()); ?> </b>sản phẩm</p>

      <form action="<?php echo e(url('cart/update')); ?>" method="post">
        <?php echo csrf_field(); ?>
        <?php if(Cart::count()>0): ?>
        <table class="shop_table beta-shopping-cart-table" cellspacing="0">

          <thead>
            <tr>
              <th>STT</th>
              <th>Tên sản phẩm</th>
              <th>Đơn giá</th>
              <th>Số lượng</th>
              <th>Thành tiền</th>
              <th>Xóa</th>
            </tr>
          </thead>

          <tbody>
            <?php
            $t=0
            ?>
            <?php $__currentLoopData = Cart::content(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php
            $t++;
            ?>
            <tr class="cart_item">
              <td><?php echo e($t); ?></td>

              <td class="product-name">
                <div class="media">
                  <a href="<?php echo e(url("product/$row->id")); ?>"><img class="pull-left"
                      src="<?php echo e(asset("image/product/{$row->options->thumbnail}")); ?>" width="50px"></a>
                  <p class="font-large table-title"><span class="amount"><?php echo e($row->name); ?></span></p>
                </div>
              </td>

              <td><span class="amount"><?php echo e(number_format($row->price,0,'','.')); ?>đ</span></td>

              <td class="product-quantity">
                <span class="amount">
                  <input type="number" min="1" max="99" name="qty[<?php echo e($row->rowId); ?>]" value="<?php echo e($row->qty); ?>"
                    style="width: 50px; text-align: center" class="qty_number">
                </span>
              </td>

              <td class="product-subtotal">
                <span class="amount"><?php echo e(number_format($row->total,0,'','.')); ?>đ</span>
              </td>

              <td class="product-remove">
                <a href="<?php echo e(route('cart.remove', $row->rowId)); ?>" class="remove" title="Xóa sản phẩm này">
                  <i class="fas fa-trash" style="font-size:large"></i>
                </a>
              </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </tbody>

          <tfoot>
            <tr>
              <td colspan="6" class="actions">
                <button type="submit" class="beta-btn primary" name="proceed" value="proceed">
                  <i class="fa fa-chevron-left" style="font-size: medium"></i>&nbsp;
                  Tiếp tục mua hàng
                </button>
                <button type="submit" class="beta-btn primary" name="update" id="update-cart">
                  Cập nhật giỏ hàng
                </button>
                <button type="submit" class="beta-btn primary pull-right" name="delete" value="delete-cart">
                  <i class="far fa-trash-alt" style="font-size: medium"></i>&nbsp;
                  Xóa giỏ hàng
                </button>
                <div class="cart-totals pull-right">
                  <div class="cart-totals-row">
                    <h5>Tổng</h5>
                  </div>
                  <div class="cart-totals-row">
                    <p class="amount color-gray"><?php echo e(Cart::total()); ?>đ</p>

                    <button type="submit" name="pay" value="pay" class="beta-btn primary">
                      Thanh toán
                      <i class="fas fa-check" style="font-size: medium"></i>
                    </button>
                  </div>
                </div>
              </td>
            </tr>
          </tfoot>
        </table>
        <?php endif; ?>
      </form>
      <!-- End of Shop Table Products -->
    </div>
  </div> <!-- #content -->
</div> <!-- .container -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.theme', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\watch_store\project\resources\views/theme/cart.blade.php ENDPATH**/ ?>