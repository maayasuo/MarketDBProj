<?php 
    // require_once('connect.php');
    session_start();
?>

<!-- Navigation         The header element that has to be the same on every page -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
<div class="container px-4 px-lg-5">
    <a class="navbar-brand" href="index.php">
        <img src="asset/logo.png" alt="Avatar Logo" style="width:50px;"> 
    </a>
    <a class="navbar-brand" href="index.php"><h4>The Closet</h4></a>     <!--SHOP NAME-->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
            <li class="nav-item"><a class="nav-link active" aria-current="page" href="index.php">Home</a></li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Shop</a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="all_product.php">All Products</a></li>
                    <li><hr class="dropdown-divider" /></li>
                    <li><a class="dropdown-item" href="top.php">Top</a></li>
                    <li><a class="dropdown-item" href="pants.php">Pants</a></li>
                    <li><a class="dropdown-item" href="accessory.php">Accessory</a></li>
                    <li><a class="dropdown-item" href="shoes.php">Shoes</a></li>
                </ul>
            </li>
            <?php 
                    if(isset($_SESSION['username']) || isset($_SESSION['logged in'])){?>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><?php echo 'Hello! '. $_SESSION['username'];?></a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="func/logout.php">Logout</a></li>
                        </ul>
                    </li>
                    <?php } else{?>
                    <li class="nav-item"><a class="nav-link" href="login_page.php">Login/Register</a></li>
                    <?php }
            ?>
        </ul>
        <form class="d-flex" action="cart.php" method="post">
            <button class="btn btn-outline-light" type="summit">
                <i class="bi-cart-fill me-1"></i>
                Cart
                <span class="badge bg-light text-black ms-1 rounded-pill">0</span>
            </button>
        </form>
    </div>
</div>
</nav>
