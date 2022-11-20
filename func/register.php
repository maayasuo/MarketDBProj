<?php
    require_once('connect.php');
    session_start();

    if(isset($_POST['signup_submit'])) {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $uAddress = $_POST['address'];
        $phone = $_POST['phone'];
        $password = md5($_POST['password']);
        $cpassword = md5($_POST['checkpassword']);
    }

    if($password == $cpassword){
        $q = "INSERT INTO user (username, pass, email, fname, lname, uAddress, phone) VALUES 
            ('".$username."','".$password."','".$email."','".$fname."','".$lname."','".$uAddress."','".$phone."')";
        $result = $mysqli->query($q);
        if (!$result) {
            $_SESSION['signuperror'] = 1;
            header( "Location: ../login_page.php" );
            die();
        }
        $_SESSION['signupsuccess'] = 1;
        header( "Location: ../login_page.php" );
        die();
    }

    else{
        $_SESSION['unmatchpassword'] = 1;
        header( "Location: ../login_page.php" );
    }
?>