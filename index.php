<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
   </head>

   <?php include "func/navbar.php"; ?>

    <div class="container px-4 px-lg-5 my-5">
      <!-- Carousel -->
      <div id="demo" class="carousel slide" data-bs-ride="carousel">

        <!-- Indicators/dots -->
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
          <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
          <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
        </div>

        <!-- The slideshow/carousel -->
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="asset/promo/promo1.png" alt="drip" class="d-block w-100">
          </div>
          <div class="carousel-item">
            <img src="asset/promo/promo2.png" alt="bond" class="d-block w-100">
          </div>
          <div class="carousel-item">
            <img src="asset/promo/promo3.png" alt="albono" class="d-block w-100">
          </div>
        </div>

        <!-- Left and right controls/icons -->
        <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
          <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
          <span class="carousel-control-next-icon"></span>
        </button>

        <div class="container-fluid py-2 mt-4">
          <h3>Featured Product</h3>
          <p>This is the products we proudly present lmao. Please for Christ sake please help me, anyone.</p>
        </div>
      </div>
    </div>

    <!-- Section-->
    <section class="mb-5">
      <div class="container px-4 px-lg-5 mt-5">
          <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
          <?php 
            $q = "SELECT * FROM product WHERE isFeature = 1";
            $result=$mysqli->query($q);
            while($row=$result->fetch_array()){?>
                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Product image-->
                        <img class="card-img-top border-bottom" src="<?php echo $row['pimagedir'] ?>" alt="..." />
                        <!-- Product details-->
                        <div class="card-body bg-mute p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder"><?php echo $row['pname'] ?></h5>
                                <!-- Product price-->
                                ฿<?php echo $row['price'] ?>
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center">
                            <form action="func/addtocart.php" method="post">
                                    <div type="submit" class="text-center">
                                        <input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-outline-dark mt-auto" value="Add to Cart" />
                                        <input type="hidden" name="productID" value="<?php echo $row['pID'] ?>"></input>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            <?php }?>
          </div>
      </div>
  </section>

  <?php include "func/footer_longpage.html"; ?>
  </body>
</html>