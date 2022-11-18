<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Home page</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    </head>

    <?php include "func/navbar.php"; ?>

    <body>
        <div class="container px-2 px-lg-3 my-5">
            <div class="container- border rounded px-4 px-lg-5 mt-5 bt-5 mb-5">
                <h4 class="d-flex justify-content-between align-items-center mb-1 mt-4">
                    <span class="text">Your cart</span>
                    <span class="badge bg-secondary rounded-pill">3</span>
                </h4>
                <p class="text-muted mb-4">Please check your items in the cart before proceed.</p>
                <ul class="list-group mb-3">
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                        <div>
                            <h6 class="my-0">Product name</h6>
                            <small class="text-muted">Brief description</small>
                        </div>
                        <span class="text-muted">$12</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                        <div>
                            <h6 class="my-0">Second product</h6>
                            <small class="text-muted">Brief description</small>
                        </div>
                        <span class="text-muted">$8</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                        <div>
                            <h6 class="my-0">Third item</h6>
                            <small class="text-muted">Brief description</small>
                        </div>
                        <span class="text-muted">$5</span>
                    </li>
                    <?php 
                        if(isset($_SESSION['promo_code'])){?>
                    <li class="list-group-item d-flex justify-content-between bg-light">
                        <div class="text-success">
                            <h6 class="my-0">Promo code</h6>
                            <small>EXAMPLECODE</small>
                        </div>
                        <span class="text-success">-$5</span>
                    </li>
                    <?php }?>
                    <li class="list-group-item d-flex justify-content-between">
                        <span>Total (USD)</span>
                        <strong>$20</strong>
                    </li>
                </ul>
                <form class="card p-2 mb-4" action="func/promo_code.php" method="post">
                    <div class="input-group">
                        <input type="text" class="form-control" name="promo_code" placeholder="Promo code">
                        <div class="input-group-append">
                            <button type="submit" class="btn btn-secondary" name="promo_code_submit">Redeem</button>
                        </div>
                    </div>
                </form>
                <form action="func/checkout.php" method="post">
                    <div class="col-md-12 text-center mb-4">
                        <button type="submit" class="btn btn-lg btn-primary" name="checkout_submit">Proceed to checkout</button>
                    </div>
                </form>
            </div>
        </div>

        <footer class="py-5 bg-dark fixed-bottom">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Seed & Flower LLC.</p></div>
        </footer>
    </body>
</html>