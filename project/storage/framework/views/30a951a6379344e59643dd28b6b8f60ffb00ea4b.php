<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>

<body>
  <div class="container">
    <div class="col-sm-12">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img width="1000px" class="d-block w-100" src="<?php echo e(asset("image/banner/banner 1.png")); ?>" alt="First slide">
          </div>
          <div class="carousel-item">
            <img width="1000px" class="d-block w-100" src="<?php echo e(asset("image/banner/banner 2.png")); ?>" alt="First slide">
          </div>
          <div class="carousel-item">
            <img width="1000px" class="d-block w-100" src="<?php echo e(asset("image/banner/banner 3.png")); ?>" alt="First slide">
          </div>
        </div>

        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
  </div>
</body>

</html><?php /**PATH C:\xampp\htdocs\watch_store\project\resources\views/theme/carousel.blade.php ENDPATH**/ ?>