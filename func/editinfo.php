<?php
    require_once("connect.php");
    session_start();
    if(isset($_POST['edit_submit'])){
        $username = $_POST['username'];
        $email = $_POST['email'];
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $address = $_POST['address'];
        $phone = $_POST['phone'];
        if($_POST['password']){
            $password = md5($_POST['password']);
            $cpassword = md5($_POST['checkpassword']);
            if($password == $cpassword){
                $q = "UPDATE user SET username = '".$username."', email = '".$email."', fname = '".$fname."', lname = '".$lname."', uAddress = '".$address."', phone = '".$phone."', pass = '".$password."' WHERE userID = '".$_SESSION['userID']."'";
                $result = $mysqli->query($q);
                if(!$result){
                    $_SESSION['editerror'] = 1;
                    header("Location: ../info_page.php");
                    die();
                }
                $_SESSION['username'] = $username;
                $_SESSION['editsuccess'] = 1;
                header("Location: ../info_page.php");
                die();
            }
            else {
                $_SESSION['unmatchpassword'] = 1;
                header( "Location: ../info_page.php" );
            }
        }
        else {
            $q = "UPDATE user SET username = '".$username."', email = '".$email."', fname = '".$fname."', lname = '".$lname."', uAddress = '".$address."', phone = '".$phone."' WHERE userID = '".$_SESSION['userID']."'";
                $result = $mysqli->query($q);
                if(!$result){
                    $_SESSION['editerror'] = 1;
                    header("Location: ../info_page.php");
                    die();
                }
                $_SESSION['username'] = $username;
                $_SESSION['editsuccess'] = 1;
                header("Location: ../info_page.php");
                die();
        }
    }
?>