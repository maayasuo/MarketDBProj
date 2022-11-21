<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Cart | The Closet official store</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    </head>
    <?php include "func/navbar.php"; $totalprice = 0; $discount = 0;?>
    <body>
        <?php 
            if(isset($_SESSION['username'])){
                $q = "SELECT pname, count(c.pID) AS amount, price FROM cart c JOIN product p ON c.pID = p.pID WHERE userID = '".$_SESSION['userID']."' GROUP BY c.pID";
                $qshow = "SELECT * FROM cart WHERE userID = '".$_SESSION['userID']."'";
                $show=$mysqli->query($qshow);
                $sumpro=$show->num_rows;
                $result=$mysqli->query($q);
                $count=$result->num_rows;
                if($count != 0){?>
                    <div class="container px-2 px-lg-3 my-5">
                        <div class="container- border rounded px-4 px-lg-5 mt-5 bt-5 mb-5">
                            <h4 class="d-flex justify-content-between align-items-center mb-1 mt-4">
                                <span class="text">Your cart</span>
                                <span class="badge bg-secondary rounded-pill"><?php echo $sumpro?></span>
                            </h4>
                            <p class="text-muted mb-4">Please check your items in the cart before proceed.</p>
                            <ul class="list-group mb-3">
                            <?php 
                                while($row=$result->fetch_array()){?>
                                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                                        <div>
                                            <h6 class="my-0"><?php echo $row['pname']?></h6>
                                            <small class="text-muted">Amount: <?php echo $row['amount']?></small>
                                        </div>
                                        <span class="text-muted">฿<?php echo number_format($row['price']*$row['amount'], 2, '.', ',')?></span>
                                    </li>
                                <?php 
                                    $totalprice += $row['price']*$row['amount'];
                                }
                                if(isset($_SESSION['promo_code'])){
                                    $discount = $totalprice*$_SESSION['percent_discounted'];?>
                                    <li class="list-group-item d-flex justify-content-between bg-light">
                                        <div class="text-success">
                                            <h6 class="my-0">Promo code</h6>
                                            <small><?php echo $_SESSION['promo_code'] ?></small>
                                        </div>
                                        <span class="text-success">-฿<?php echo number_format($discount, 2, '.', ',')?></span>
                                    </li>
                                <?php }
                                else {$_SESSION['percent_discounted'] = 0;} ?>
                                    <li class="list-group-item d-flex justify-content-between">
                                        <span>Total (BAHT)</span>
                                        <strong>฿<?php echo number_format($totalprice-$discount, 2, '.', ',')?></strong>
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
                            <?php if(isset($_SESSION['promoerror'])) { unset($_SESSION['promoerror']); ?>
                            <p class="text-warning">*Please enter a valid promo code</P> <?php }?>
                            <form action="func/checkout.php" method="post">
                                <div class="row justify-content-center">
                                    <div class="col-md-2 text-center mb-4">
                                        <button type="submit" class="btn btn-lg btn-outline-danger" name="clearcart_submit">Clear Cart</button>
                                    </div>
                                    <div class="col-md-4 text-center mb-4">
                                        <button type="submit" class="btn btn-lg btn-primary" name="checkout_submit">Proceed to checkout</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                <?php } else {?>
                    <div class="d-flex justify-content-md-center align-items-center vh-100 p-5">
                        <div class="py-5 text-center">
                            <img class="d-block mx-auto mb-4" src="asset/info_icon.svg" alt="" width="72" height="72">
                            <h2 class="mb-4">Your cart is empty!</h2>
                            <p class="lead">Please add items to your cart first before checkout.</p>
                        </div>
                    </div>
            <?php }}
            else {?> 
                <div class="d-flex justify-content-md-center align-items-center vh-100 p-5">
                    <div class="py-5 text-center">
                        <img class="d-block mx-auto mb-4" src="asset/info_icon.svg" alt="" width="72" height="72">
                        <h2 class="mb-4">You are not signed in!</h2>
                        <p class="lead">You haven't sign in into your account.<br>Please sign in first before adding product to your account.</p>
                    </div>
                </div>
        <?php }?>
    </body>
</html>