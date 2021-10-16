<?php

$host = "localhost";
$username = "root";
$password = "";
$database = "covid_care";

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