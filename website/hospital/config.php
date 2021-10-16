<?php

    $conn = mysqli_connect("localhost","root","","covid_care");

    if(!$conn)
    {
        die("Connection failed: " . mysqli_connect_error());
    }

?>