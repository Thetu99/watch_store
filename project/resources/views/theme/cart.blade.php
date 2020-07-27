@extends('layouts.theme')

@section('content')
<div class="inner-header">
  <div class="container">
    <div class="pull-left">
      <h6 class="inner-title">Giỏ hàng</h6>
    </div>

    <div class="pull-right">
      <div class="beta-breadcrumb font-large">
        <a href="{{url('home')}}" class="home fa fa-home"> Trang chủ</a> / <span>Giỏ hàng</span>
      </div>
    </div>
    <div class="clearfix"></div>
  </div>
</div>

<div class="container">
  <div id="content">

    <div class="table-responsive">
      <p>Hiện tại có<b style="color: red"> {{Cart::count()}} </b>sản phẩm</p>
      <!-- Shop Products Table -->
      <form action="{{url('cart/update')}}" method="post">
        @csrf
        @if (Cart::count()>0)
        <table class="shop_table beta-shopping-cart-table" cellspacing="0">

          <thead>
            <tr>
              <th>STT</th>
              <th>Tên sản phẩm</th>
              <th>Giá tiền</th>
              <th>Số lượng</th>
              <th>Thành tiền</th>
              <th>Xóa</th>
            </tr>
          </thead>

          <tbody>
            @php
            $t=0
            @endphp
            @foreach (Cart::content() as $row)
            @php
            $t++;
            @endphp
            <tr class="cart_item">
              <td>{{$t}}</td>

              <td class="product-name">
                <div class="media">
                  <img class="pull-left" src="{{asset("image/product/{$row->options->thumbnail}")}}" width="50px">
                  <p class="font-large table-title"><span class="amount">{{$row->name}}</span></p>
                </div>
              </td>

              <td><span class="amount">{{number_format($row->price,0,'','.')}}đ</span></td>

              <td class="product-quantity">
                <span class="amount">
                  <input type="number" min="1" name="qty[{{$row->rowId}}]" value="{{$row->qty}}"
                    style="width: 50px; text-align: center">
                </span>
              </td>

              <td class="product-subtotal">
                <span class="amount">{{number_format($row->total,0,'','.')}}đ</span>
              </td>

              <td class="product-remove">
                <a href="{{route('cart.remove', $row->rowId)}}" class="remove" title="Xóa sản phẩm này">
                  <svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-trash" fill="currentColor"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                      d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
                    <path fill-rule="evenodd"
                      d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
                  </svg>
                </a>
              </td>
            </tr>
            @endforeach
          </tbody>

          <tfoot>
            <tr>
              <td colspan="6" class="actions">
                <a href="{{url('home')}}" class="beta-btn primary" name="proceed">                  
                  <i class="fa fa-chevron-left"></i>
                  Tiếp tục mua hàng
                </a>
                <input type="submit" class="beta-btn primary" name="update_cart" value="Cập nhật giỏ hàng">
                <div class="cart-totals pull-right">
                  <div class="cart-totals-row">
                    <h5>Tổng</h5>
                  </div>
                  <div class="cart-totals-row">
                    <p class="amount color-gray">{{Cart::total()}}đ</p>
                    <a href="{{url('checkout')}}" class="beta-btn primary">Thanh toán</a>
                  </div>
                </div>
              </td>
            </tr>
          </tfoot>
        </table>
        @endif
      </form>
      <!-- End of Shop Table Products -->
    </div>
  </div> <!-- #content -->
</div> <!-- .container -->
@endsection