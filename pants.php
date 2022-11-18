<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <?php include "func/navbar.php"; ?>

    <!-- Section-->
    <section class="mb-5">
    <div class="container px-4 px-lg-5 mt-5">
        <h2>Pants</h2>
        <p class="mb-5">This is the finest products we have hand-picked. Just for you.</p>
        <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
            <div class="col mb-5">
                <div class="card h-100">
                    <!-- Product image-->
                    <img class="card-img-top border-bottom" src="asset/product/pants/p1.jpg" alt="..." />
                    <!-- Product details-->
                    <div class="card-body bg-mute p-4">
                        <div class="text-center">
                            <!-- Product name-->
                            <h5 class="fw-bolder">Black Jean</h5>
                            <!-- Product price-->
                            ฿499.00
                        </div>
                    </div>
                    <!-- Product actions-->
                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                        <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Add to cart</a></div>
                    </div>
                </div>
                </div>
            <div class="col mb-5">
                <div class="card h-100">
                    <!-- Product image-->
                    <img class="card-img-top border-bottom" src="asset/product/pants/p2.jpg" alt="..." />
                    <!-- Product details-->
                    <div class="card-body bg-mute p-4">
                        <div class="text-center">
                            <!-- Product name-->
                            <h5 class="fw-bolder">Short Jean</h5>
                            <!-- Product price-->
                            ฿379.00
                        </div>
                    </div>
                    <!-- Product actions-->
                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                        <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Add to cart</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include "func/footer.html"; ?>

</body>
</html>