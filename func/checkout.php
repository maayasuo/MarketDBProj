<?php
require_once("connect.php");
session_start();
$q = "DELETE FROM cart WHERE userID = '".$_SESSION['userID']."'";
$result=$mysqli->query($q);

if(isset($_POST['checkout_submit'])) {
    header("Location: ../purchased.php");
    die();
}

if(isset($_POST['clearcart_submit'])) {
    header("Location: ../cart.php");
    die();
}
?>