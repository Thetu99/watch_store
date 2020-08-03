<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?php echo e(asset('bootstrap-4.5.0/css/bootstrap.min.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('fontawesome-5.14.0/css/all.min.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">
  <script src="https://cdn.tiny.cloud/1/hiio4n2esmuaf8c701sdk2zpeetbcs4761t59z25h3l9kwmp/tinymce/5/tinymce.min.js"
    referrerpolicy="origin"></script>
  <script>
    tinymce.init({
      selector:'textarea',
      height: 300,
    plugins: [
      'advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker',
      'searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking',
      'table emoticons template paste help'
    ],
    toolbar: 'undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | ' +
      'bullist numlist outdent indent | link image | print preview media fullpage | ' +
      'forecolor backcolor emoticons | help',
    menu: {
      favs: {title: 'My Favorites', items: 'code visualaid | searchreplace | spellchecker | emoticons'}
    },
    menubar: 'favs file edit view insert format tools table help',
    content_css: 'css/content.css'
    });
  </script>

  <title>Trang quản trị</title>
</head>

<body>
  <div id="warpper" class="nav-fixed">
    <nav class="topnav shadow navbar-light bg-warning d-flex">
      <div class="navbar-brand"><a href="<?php echo e(url('admin')); ?>">WATCH SHOP ADMIN</a></div>
      <div class="nav-right ">
        <div class="btn-group mr-auto">
          
      </div>

      

      <div class="btn-group">
        <a type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <b><?php echo e(Auth::user()->name); ?></b>
        </a>
        <div class="dropdown-menu dropdown-menu-right">
          <a class="dropdown-item" href="#">Tài khoản</a>
          <a class="dropdown-item" href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
            <?php echo e(__('Logout')); ?>

          </a>

          <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
            <?php echo csrf_field(); ?>
          </form>
        </div>
      </div>
  </div>
  </nav>
  <!-- end nav  -->
  <div id="page-body" class="d-flex">
    <div id="sidebar" class="bg-dark">
      <ul id="sidebar-menu">
        
        <li class="nav-link">
          <a href="<?php echo e(url('admin')); ?>">
            <div class="nav-link-icon d-inline-flex">
              <i class="far fa-folder"></i>
            </div>
            Bán hàng
          </a>
          <i class="arrow fas fa-angle-right"></i>
          <ul class="sub-menu">
            <li><a href="<?php echo e(url('admin')); ?>">Đơn hàng</a></li>
            <li><a href="<?php echo e(url('admin/comment/list')); ?>">Bình luận</a></li>
          </ul>
        </li>
        <li class="nav-link">
          <a href="<?php echo e(url('admin/banner/list')); ?>">
            <div class="nav-link-icon d-inline-flex">
              <i class="far fa-folder"></i>
            </div>
            Quảng cáo
          </a>
          <i class="arrow fas fa-angle-right"></i>
          <ul class="sub-menu">
            <li><a href="<?php echo e(url('admin/banner/list')); ?>">Banner</a></li>
          </ul>
        </li>
        <li class="nav-link">
          <a href="<?php echo e(url('admin/product/list')); ?>">
            <div class="nav-link-icon d-inline-flex">
              <i class="far fa-folder"></i>
            </div>
            Sản phẩm
          </a>
          <i class="arrow fas fa-angle-right"></i>
          <ul class="sub-menu">
            <li><a href="<?php echo e(url('admin/product/list')); ?>">Toàn bộ</a></li>
          </ul>
        </li>
        <li class="nav-link">
          <a href="<?php echo e(url('admin/brand/list')); ?>">
            <div class="nav-link-icon d-inline-flex">
              <i class="far fa-folder"></i>
            </div>
            Thương hiệu
          </a>
          <i class="arrow fas fa-angle-right"></i>
          <ul class="sub-menu">
            <li><a href="<?php echo e(url('admin/brand/list')); ?>">Danh sách</a></li>
          </ul>
        </li>
        <li class="nav-link">
          <a href="<?php echo e(url('admin/user/list')); ?>">
            <div class="nav-link-icon d-inline-flex">
              <i class="far fa-folder"></i>
            </div>
            Quản trị viên
          </a>
          <i class="arrow fas fa-angle-right"></i>

          <ul class="sub-menu">
            <li><a href="<?php echo e(url('admin/user/list')); ?>">Danh sách</a></li>
            <li><a href="<?php echo e(url('admin/user/add')); ?>">Thêm mới</a></li>
          </ul>
        </li>
      </ul>
    </div>
    <div id="wp-content">
      <?php echo $__env->yieldContent('content'); ?>
    </div>
  </div>

  <script src="<?php echo e(asset('js/jquery-3.5.1.min.js')); ?>"></script>
  <script src="<?php echo e(asset('js/app.js')); ?>"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
  <script src="<?php echo e(asset('bootstrap-4.5.0/js/bootstrap.min.js')); ?>"></script>
</body>

</html><?php /**PATH C:\xampp\htdocs\watch_store\project\resources\views/layouts/admin.blade.php ENDPATH**/ ?>