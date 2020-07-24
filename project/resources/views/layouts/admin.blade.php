<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/solid.min.css">
  <link rel="stylesheet" href="{{asset('css/style.css')}}">
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

  <title>Admintrator</title>
</head>

<body>
  <div id="warpper" class="nav-fixed">
    <nav class="topnav shadow navbar-light bg-warning d-flex">
      <div class="navbar-brand"><a href="{{url('admin')}}">WATCH SHOP ADMIN</a></div>
      <div class="nav-right ">
        <div class="btn-group mr-auto">
          {{-- <button type="button" class="btn dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="plus-icon fas fa-plus-circle"></i>
          </button> --}}
          <div class="dropdown-menu">
            <a class="dropdown-item" href="{{url('admin/post/add')}}">Thêm bài viết</a>
            <a class="dropdown-item" href="{{url('admin/product/add')}}">Thêm sản phẩm</a>
            <a class="dropdown-item" href="{{url('admin/order/list')}}">Xem đơn hàng</a>
          </div>
        </div>
        <div class="btn-group">
          <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">
            <b>{{Auth::user()->name}}</b>
          </button>
          <div class="dropdown-menu dropdown-menu-right">
            <a class="dropdown-item" href="#">Tài khoản</a>
            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
              {{ __('Logout') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
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
            <a href="{{url('dashboard')}}">
              <div class="nav-link-icon d-inline-flex">
                <i class="far fa-folder"></i>
              </div>
              Bảng điều khiển
            </a>
            <i class="arrow fas fa-angle-right"></i>
          </li>
          <li class="nav-link">
            <a href="{{url('admin')}}">
              <div class="nav-link-icon d-inline-flex">
                <i class="far fa-folder"></i>
              </div>
              Bán hàng
            </a>
            <i class="arrow fas fa-angle-right"></i>
            <ul class="sub-menu">
              <li><a href="{{url('admin')}}">Đơn hàng</a></li>
            </ul>
          </li>
          <li class="nav-link">
            <a href="{{url('admin/banner/list')}}">
              <div class="nav-link-icon d-inline-flex">
                <i class="far fa-folder"></i>
              </div>
              Quảng cáo
            </a>
            <i class="arrow fas fa-angle-down"></i>
            <ul class="sub-menu">
              <li><a href="{{url('admin/banner/list')}}">Danh sách</a></li>
              <li><a href="{{url('admin/banner/add')}}">Thêm mới</a></li>
            </ul>
          </li>
          <li class="nav-link">
            <a href="{{url('admin/product/list')}}">
              <div class="nav-link-icon d-inline-flex">
                <i class="far fa-folder"></i>
              </div>
              Sản phẩm
            </a>
            <i class="arrow fas fa-angle-down"></i>
            <ul class="sub-menu">
              <li><a href="{{url('admin/product/list')}}">Danh sách</a></li>
              <li><a href="{{url('admin/product/add')}}">Thêm mới</a></li>
            </ul>
          </li>
          <li class="nav-link">
            <a href="{{url('admin/brand/list')}}">
              <div class="nav-link-icon d-inline-flex">
                <i class="far fa-folder"></i>
              </div>
              Thương hiệu
            </a>
            <i class="arrow fas fa-angle-down"></i>
            <ul class="sub-menu">
              <li><a href="{{url('admin/brand/list')}}">Danh sách</a></li>
              <li><a href="{{url('admin/brand/add')}}">Thêm mới</a></li>
            </ul>
          </li>
          <li class="nav-link">
            <a href="{{url('admin/user/list')}}">
              <div class="nav-link-icon d-inline-flex">
                <i class="far fa-folder"></i>
              </div>
              Quản trị viên
            </a>
            <i class="arrow fas fa-angle-right"></i>

            <ul class="sub-menu">
              <li><a href="{{url('admin/user/list')}}">Danh sách</a></li>
              <li><a href="{{url('admin/user/add')}}">Thêm mới</a></li>
            </ul>
          </li>

          <!-- <li class="nav-link"><a>Bài viết</a>
                        <ul class="sub-menu">
                            <li><a>Thêm mới</a></li>
                            <li><a>Danh sách</a></li>
                            <li><a>Thêm danh mục</a></li>
                            <li><a>Danh sách danh mục</a></li>
                        </ul>
                    </li>
                    <li class="nav-link"><a>Sản phẩm</a></li>
                    <li class="nav-link"><a>Đơn hàng</a></li>
                    <li class="nav-link"><a>Hệ thống</a></li> -->

        </ul>
      </div>
      <div id="wp-content">
        @yield('content')
      </div>


    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="{{asset('js/app.js')}}"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
      integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
      integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>