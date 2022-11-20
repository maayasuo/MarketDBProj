<?php
    require_once("connect.php");
    session_start();
    if(isset($_SESSION['username'])){
        $productID = $_POST['productID'];
        $q = "INSERT INTO cart(pID, userID) VALUES ('".$productID."','".$_SESSION['userID']."')";
        $result = $mysqli->query($q);
        header("location: $_SERVER[HTTP_REFERER]");
    }
    else{
        $_SESSION['nouser'] = 1;
        header("location: ../login_page.php");
    }
?>