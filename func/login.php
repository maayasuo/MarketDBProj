<?php
if(isset($_POST['login_submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    session_start();
    if($username != "phasin" OR $password != "1234") {
        $_SESSION['loginerror'] = 1;
        header( "Location: ../login_page.php" );
        die();
    }
    $_SESSION['username'] = $username;
    $_SESSION['password'] = $password;
    $_SESSION['logged_in'] = time();
    header( "Location: ../index.php" );
    die();
}
?>