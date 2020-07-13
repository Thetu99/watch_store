@extends('layouts.theme')

@section('content')
<div class="inner-header">
  <div class="container">
    <div class="pull-left">
      <h6 class="inner-title">Đặt hàng</h6>
    </div>
    <div class="pull-right">
      <div class="beta-breadcrumb">
        <a href="index.html">Trang chủ</a> / <span>Đặt hàng</span>
      </div>
    </div>
    <div class="clearfix"></div>
  </div>
</div>

<div class="container">
  <div id="content">
    <form action="{{url('checkout/order')}}" method="post" class="beta-form-checkout">
      @csrf
      <div class="row">
        <div class="col-sm-6">
          <h4>Đặt hàng</h4>
          <div class="space20">&nbsp;</div>

          <div class="form-block">
            <label for="name">Họ tên*</label>
            <input type="text" name="name" id="name" required>
          </div>
          <div class="form-block">
            <label>Giới tính </label>
            <input id="gender" type="radio" class="input-radio" name="gender" value="nam" checked="checked"
              style="width: 10%"><span style="margin-right: 10%">Nam</span>
            <input id="gender" type="radio" class="input-radio" name="gender" value="nữ"
              style="width: 10%"><span>Nữ</span>
          </div>

          <div class="form-block">
            <label for="email">Email*</label>
            <input type="email" name="email" id="email" required>
          </div>

          <div class="form-block">
            <label for="address">Địa chỉ*</label>
            <input type="text" name="address" id="adress" required>
          </div>


          <div class="form-block">
            <label for="phone">Điện thoại*</label>
            <input type="text" name="phone" id="phone" required>
          </div>

          <div class="form-block">
            <label for="note">Ghi chú</label>
            <textarea name="note" id="note"></textarea>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="your-order">
            <div class="your-order-head">
              <h5>Đơn hàng của bạn</h5>
            </div>
            <div class="your-order-body" style="padding: 0px 10px">
              <div class="your-order-item">
                @foreach ($products as $p)
                <!--  one item	 -->
                <div class="media">
                  <img width="50px" src="{{asset("image/product/{$p->options->thumbnail}")}}" class="pull-left">
                  <div class="media-body">
                    <p class="font-large"><b>{{$p->name}}</b></p>
                    <span class="color-gray your-order-info">Giá tiền: {{$p->price}}</span>
                    <span class="color-gray your-order-info">Số lượng: {{$p->qty}}</span>
                  </div>
                </div>
                <!-- end one item -->
                @endforeach

                <div class="clearfix"></div>
              </div>
              <div class="your-order-item">
                <div class="pull-left">
                  <p class="your-order-f18">Tổng tiền:</p>
                </div>
                <div class="pull-right">
                  <h5 class="color-black">{{Cart::total()}}đ</h5>
                </div>
                <div class="clearfix"></div>
              </div>
            </div>
            <div class="your-order-head">
              <h5>Hình thức thanh toán</h5>
            </div>

            <div class="your-order-body">
              <ul class="payment_methods methods">
                <li class="payment_method_bacs">
                  <input id="payment_method_bacs" type="radio" class="input-radio" name="payment_method" value="COD"
                    checked="checked" data-order_button_text="">
                  <label for="payment_method_bacs">Thanh toán khi nhận hàng </label>
                  <div class="payment_box payment_method_bacs" style="display: block;">
                    Cửa hàng sẽ gửi hàng đến địa chỉ của bạn, bạn xem hàng rồi thanh toán tiền cho nhân viên giao hàng
                  </div>
                </li>

                <li class="payment_method_cheque">
                  <input id="payment_method_cheque" type="radio" class="input-radio" name="payment_method" value="ATM"
                    data-order_button_text="">
                  <label for="payment_method_cheque">Chuyển khoản </label>
                  <div class="payment_box payment_method_cheque" style="display: none;">
                    Chuyển tiền đến tài khoản sau:
                    <br>- Số tài khoản: 123 456 789
                    <br>- Chủ TK: Nguyễn Văn Thành
                    <br>- Ngân hàng BIDV, Chi nhánh Hà Thành
                  </div>
                </li>

              </ul>
            </div>

            <div class="text-center">
              <input type="submit" name="btn-submit" value="Đặt hàng" class="beta-btn primary">
            </div>
          </div> <!-- .your-order -->
        </div>
      </div>
    </form>
  </div> <!-- #content -->
</div> <!-- .container -->
@endsection