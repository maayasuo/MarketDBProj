<?php
if(isset($_POST['checkout_submit'])) {
    session_start();
    // remove all session variables
    session_unset();
    // destroy the session
    session_destroy();
    //redirect
    header("Location: ../purchased.php");
    die();
}
?>