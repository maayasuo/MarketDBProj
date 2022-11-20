<?php
    require_once("connect.php");

    if(isset($_POST['promo_code_submit'])){
        session_start();
        $promo_code = $_POST['promo_code'];
        $q = "SELECT * FROM promocode WHERE codeID='".$promo_code."'";
        $result = $mysqli->query($q);
        
        if(!$result) {
            $_SESSION['promoerror'] = 1;
            header( "Location: ../cart.php" );
            die();
        }

        $count = $result->num_rows;
        if($count==1){
            $row = $result->fetch_array();
            $_SESSION['percent_discounted'] = $row['percentDiscounted'];
            $_SESSION['promo_code'] = $promo_code;
            header( "Location: ../cart.php" );
            die();
        }

        else {
            $_SESSION['promoerror'] = 1;
            header( "Location: ../cart.php" );
            die();
        }
    }
?>