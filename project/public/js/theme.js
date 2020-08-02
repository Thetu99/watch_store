$(function ($) {
  $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });
  //Cố định thanh điều hướng khi cuộn chuột
  /* $(window).scroll(function () {
    if ($(this).scrollTop() > 150) {
      $(".header-bottom").addClass("fixNav");
    } else {
      $(".header-bottom").removeClass("fixNav");
    }
  }); */

  //Cố định footer ở vài trang
  var title = $(".inner-title").text();
  if (title == "Giỏ hàng" || title == "Liên hệ" || title == "Đặt hàng") {
    $("body").css({ "display": "flex", "flex-direction": "column" });
  }

  //Hiển thị form phản hồi
  $(".reply-form").hide();
  $("span#reply1").click(function () {
    $(this).closest(".row").next().next().toggle();
  });

  //Chuyển tab mô tả và bình luận
  $("a#nav-comment").click(function () {
    $(this).addClass("font-weight-bold");
    $("a#nav-detail").removeClass("font-weight-bold");
  });
  $("a#nav-detail").click(function () {
    $(this).addClass("font-weight-bold");
    $("a#nav-comment").removeClass("font-weight-bold");
  });

  //Cập nhật giỏ hàng
  $("#update-cart").hide();

  $(".qty_number").change(function () {
    $(this).on('blur mouseleave', function () {
      $("#update-cart").click();
    });
  });

  //Bắt buộc nhập số điện thoại
  $("#phone").on('keypress keyup blur', function (event) {
    $(this).val($(this).val().replace(/[^\d].+/, ""));
    if ((event.which < 48 || event.which > 57)) {
      event.preventDefault();
    }
  });

  //Băng chuyền Owl Carousel
  var owl = $('.owl-carousel');

  owl.owlCarousel({
    loop: true,
    margin: 10,
    autoplay: true,
    autoplayTimeout: 2000,
    /* autoWidth:true, */
    nav: true,
    navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
    responsive: {
      0: {
        items: 1
      },
      600: {
        items: 3
      },
      1000: {
        items: 4
      }
    }
  });
  //Cuộn chuột Carousel
  owl.on('mousewheel', '.owl-stage', function (e) {
    if (e.deltaY > 0) {
      owl.trigger('next.owl');
    } else {
      owl.trigger('prev.owl');
    }
    e.preventDefault();
  });

  //Xem thêm sản phẩm
  $(".list").showMoreItems({
    startNum: 8,
    afterNum: 8,
    original: true,
    moreText: "Xem thêm",
    backMoreText: "Rút gọn",
    responsive: [
      {
        breakpoint: 1000,
        settings: {
          startNum: 3,
          afterNum: 3,
        }
      },
      {
        breakpoint: 600,
        settings: {
          startNum: 2,
          afterNum: 2,
        }
      }
    ],
  });
});