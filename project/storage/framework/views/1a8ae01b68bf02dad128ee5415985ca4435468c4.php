

<?php $__env->startSection('content'); ?>
<div class="inner-header">
  <div class="container">
    <div class="pull-left">
      <h4 class="inner-title">Chi tiết sản phẩm</h4>
    </div>
    <div class="pull-right">
      <div class="beta-breadcrumb font-large">
        <a href="<?php echo e(url('home')); ?>" class="home fa fa-home"> Trang chủ</a> / <span>Sản phẩm</span>
      </div>
    </div>
    <div class="clearfix"></div>
  </div>
</div>

<div class="container">
  <div id="content">
    <div class="row">
      <div class="col-sm-9">

        <div class="row">
          <div class="col-sm-4">
            <img src="<?php echo e(asset("image/product/$products->thumbnail")); ?>">
          </div>
          <div class="col-sm-8">
            <div class="single-item-body">
              <p class="single-item-title"><b><?php echo e($products->name); ?></b></p>
              <p class="single-item-price">
                <span class="color-gray"><?php echo e(number_format($products->price,0,'','.')); ?>đ</span>
              </p>
            </div>

            <div class="clearfix"></div>
            <div class="space20">&nbsp;</div>

            <div class="single-item">
              <p class="single-item-title"><b style="color: green"><?php echo e($products->status); ?></b></p>
              <a class="add-to-cart pull-left" href="<?php echo e(route('cart.add', $products->id)); ?>">
                <i class="fa fa-shopping-cart"></i>
                <a class="beta-btn primary" href="<?php echo e(route('cart.add', $products->id)); ?>">Cho vào giỏ hàng</a>
              </a>

            </div>
            <div class="space20">&nbsp;</div>


            <div class="clearfix"></div>
          </div>
        </div>

        <div class="space40">&nbsp;</div>
        <div class="woocommerce-tabs">
          <ul class="tabs">
            <li><a href="#tab-description">Mô tả</a></li>
            <li><a href="#tab-reviews">Bình luận (<?php echo e($comments->total()); ?>)</a></li>
          </ul>

          <div class="panel" id="tab-description">
            <?php echo $products->content; ?>

          </div>
          <div class="panel" id="tab-reviews">
            <form action="<?php echo e(route('comment.store', $products->id)); ?>" method="post" autocomplete="off">
              <?php echo csrf_field(); ?>
              <div class="comment">
                <label>Họ tên:</label>
                <input type="text" name="name" id="name" required>
                <label>Phản hồi:</label>
                <textarea name="content" maxlength="200" placeholder="Nội dung giới hạn 200 ký tự" required></textarea>
              </div>
              <button type="submit" value="Thêm mới" class="btn btn-primary">Gửi phản hồi</button>
            </form>

            <div class="space50">&nbsp;</div>

            <div class="card border-primary">
              <div class="card-body">
                <?php $__currentLoopData = $comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="media mb-1">
                  <img width="50px" class="mr-3" src="<?php echo e(asset("image/comment/guest-user.jpg")); ?>">
                  <div class="media-body">
                    <div class="row">
                      <div class="col-sm-9">
                        <p class="mt-0 font-weight-bold"><?php echo e($c->name); ?></p>
                      </div>
                      <div class="col-sm-3">
                        <div class="text-right font-italic"><?php echo e(date("G:i j-n-Y", strtotime($c->created_at))); ?></div>
                      </div>
                    </div>
                    <div class="row mt-3">
                      <div class="col-sm-9">
                        <p class=""><?php echo e($c->content); ?></p>
                      </div>
                      <div class="col-sm-3 text-right">
                        <span id="reply1" class="btn btn-secondary btn-sm text-white">Trả lời</span>
                      </div>
                    </div>

                    <div class="space20">&nbsp;</div>

                    <div class="reply-form">
                      <form action="<?php echo e(route('reply.store', $c->id)); ?>" method="post" autocomplete="off">
                        <?php echo csrf_field(); ?>
                        <input type="text" name="name" placeholder="Họ tên" required>
                        <textarea name="content" maxlength="200" placeholder="Nội dung giới hạn 200 ký tự"
                          required></textarea>
                        <button type="submit" class="btn btn-primary btn-sm">Gửi</button>
                      </form>
                      <div class="space40">&nbsp;</div>
                    </div>

                    <?php
                    $replies = App\Reply::where('comment_id', $c->id)->orderBy('created_at', 'asc')->get();
                    ?>

                    <div class="row">
                      <div class="col-sm-12">
                        <?php $__currentLoopData = $replies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $r): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="media">
                          <img width="50px" class="mr-3" src="<?php echo e(asset("image/comment/guest-user.jpg")); ?>">
                          <div class="media-body">
                            <div class="row">
                              <div class="col-sm-8">
                                <p class="font-weight-bold"><?php echo e($r->name); ?></p>
                              </div>
                              <div class="col-sm-4">
                                <div id="reply1" class="text-right font-italic"><?php echo e(date("G:i j-n-Y", strtotime($r->created_at))); ?>

                                </div>
                              </div>
                            </div>
                            <div class="row mt-3">
                              <div class="col-sm-8">
                                <p><?php echo e($r->content); ?></p>
                              </div>
                              <div class="col-sm-4"></div>
                            </div>
                          </div>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      </div>
                    </div>
                  </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </div>

            </div>

            <div class="text-center"><?php echo e($comments->links()); ?></div>

            <div class="space20">&nbsp;</div>
          </div>
        </div>

        <div class="beta-products-list">
          <h4>Sản phẩm liên quan</h4>
          <div class="space80">&nbsp;</div>
          <div class="row">
            <?php $__currentLoopData = $relations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $r): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-sm-4">
              <div class="single-item">
                <div class="single-item-header">
                  <a href="<?php echo e(route('product.show', $r->id)); ?>"><img src="<?php echo e(asset("image/product/{$r->thumbnail}")); ?>"></a>
                </div>
                <div class="single-item-body">
                  <p class="single-item-title"><b><?php echo e($r->name); ?></b></p>
                  <p class="single-item-price">
                    <span class="color-gray"><?php echo e(number_format($r->price,0,'','.')); ?>đ</span>
                  </p>
                </div>
                <div class="space20">&nbsp;</div>
                <div class="single-item-caption">
                  <p class="single-item-title"><b style="color: green"><?php echo e($r->status); ?></b></p>
                  <a class="add-to-cart pull-left" href="<?php echo e(route('cart.add', $r->id)); ?>"><i
                      class="fa fa-shopping-cart"></i></a>
                  <a class="beta-btn primary" href="<?php echo e(route('product.show', $r->id)); ?>">Chi tiết<i
                      class="fa fa-chevron-right"></i></a>
                  <div class="space80">&nbsp;</div>
                </div>
              </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </div>
        </div> <!-- .beta-products-list -->
      </div>

      <div class="col-sm-3 aside">
        <div class="widget">
          <h3 class="widget-title">Có thể bạn quan tâm</h3>
          <div class="widget-body">
            <div class="beta-sales beta-lists">
              <?php $__currentLoopData = $randoms; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $r): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <div class="media beta-sales-item">
                <a class="pull-left" href="<?php echo e(route('product.show', $r->id)); ?>"><img
                    src="<?php echo e(asset("image/product/{$r->thumbnail}")); ?>"></a>
                <div class="media-body">
                  <b><?php echo e($r->name); ?></b>
                  <span class="color-gray"><?php echo e(number_format($r->price,0,'','.')); ?>đ</span>
                </div>
              </div>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
          </div>
        </div> <!-- best sellers widget -->

        <div class="widget">
          <h3 class="widget-title">Đồng hồ mới</h3>
          <div class="widget-body">
            <div class="beta-sales beta-lists">
              <?php $__currentLoopData = $news; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $n): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <div class="media beta-sales-item">
                <a class="pull-left" href="<?php echo e(route('product.show', $n->id)); ?>"><img
                    src="<?php echo e(asset("image/product/{$n->thumbnail}")); ?>"></a>
                <div class="media-body">
                  <b><?php echo e($n->name); ?></b>
                  <span class="color-gray"><?php echo e(number_format($n->price,0,'','.')); ?>đ</span>
                </div>
              </div>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </div>
          </div>
        </div> <!-- best sellers widget -->
      </div>
    </div>
  </div> <!-- #content -->
</div> <!-- .container -->

<script type="text/javascript">
  $(function() {
      // this will get the full URL at the address bar
      var url = window.location.href;

      // passes on every "a" tag
      $(".main-menu a").each(function() {
          // checks if its the same on the address bar
          if (url == (this.href)) {
              $(this).closest("li").addClass("active");
            $(this).parents('li').addClass('parent-active');
          }
      });
  });
</script>

<script>
  jQuery(document).ready(function($) {
    jQuery('#style-selector').animate({
    left: '-213px'
  });

  jQuery('#style-selector a.close').click(function(e){
    e.preventDefault();
    var div = jQuery('#style-selector');
    if (div.css('left') === '-213px') {
      jQuery('#style-selector').animate({
        left: '0'
      });
      jQuery(this).removeClass('icon-angle-left');
      jQuery(this).addClass('icon-angle-right');
    } else {
      jQuery('#style-selector').animate({
        left: '-213px'
      });
      jQuery(this).removeClass('icon-angle-right');
      jQuery(this).addClass('icon-angle-left');
    }
  });
      });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.theme', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\watch_store\project\resources\views/theme/product.blade.php ENDPATH**/ ?>