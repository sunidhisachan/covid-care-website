<?php

$host = "localhost";
$username = "root";
$password = "";
$database = "admin_panel";

//Connection

$con = mysqli_connect("$host","$username","$password","$database");

if(!$con) {
    header("Location: ../errors/dberror.php");
    die();
}
/*
else {
    echo "Database Connected";
}
*/
?>