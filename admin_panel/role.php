<?php


if(isset($_SESSION['auth'])) {

    if($_SESSION['auth'] == "1") {
        
    }
    else {
        $_SESSION['role_status']= "You don't have access to that page. Only Admins can Access that page.";
        header('location: index.php');
        exit(0);
    }
}
?>