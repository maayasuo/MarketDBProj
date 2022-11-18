<?php
if(isset($_POST['promo_code_submit'])) {
    $promo_code = $_POST['promo_code'];
    session_start();
    $_SESSION['promo_code'] = $promo_code;
    header( "Location: ../cart.php" );
    die();
}
?>