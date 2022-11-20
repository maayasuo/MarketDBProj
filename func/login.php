<?php
require_once("connect.php");

if(isset($_POST['login_submit'])) {
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    
    session_start();
    
    $q = "SELECT * FROM user WHERE pass='".$password."' AND username='".$username."'" ;
    $result = $mysqli->query($q);
    
    if(!$result) {
        $_SESSION['loginerror'] = 1;
        header( "Location: ../login_page.php" );
        die();
    }

    $count = $result->num_rows;
    if($count==1){
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;
        $_SESSION['logged_in'] = time();
        header( "Location: ../index.php" );
        die();
    }

    else {
        $_SESSION['loginerror'] = 1;
        header( "Location: ../login_page.php" );
        die();
    }
}
?>