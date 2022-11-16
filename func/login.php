<?php
if(isset($_POST['login_submit'])) {
    $user = $_POST['username'];
    $password = $_POST['password'];
    session_start();
    $_SESSION['username'] = $user;
    $_SESSION['logged_in'] = time();
    header( "Location: ../index.php" );
    die();
}
?>