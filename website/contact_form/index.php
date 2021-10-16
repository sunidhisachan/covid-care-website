<?php
    include 'config.php';
?>

<?php

    if(isset($_POST['submit']))
    {
        if(!empty($_POST['f_name']) && !empty($_POST['l_name']) && !empty($_POST['email']) && !empty($_POST['phone_no']) && !empty($_POST['message']))
        {
            $firstName = $_POST['f_name'];
            $lastName =  $_POST['l_name'];
            $email = $_POST['email'];
            $contact_no = $_POST['phone_no'];
            $message = $_POST['message'];

            $query = "INSERT INTO feedback (f_name, l_name, email, phone_no, message) VALUES('$firstName', '$lastName', '$email', '$contact_no', '$message')";

            $sql = mysqli_query($conn, $query) or die(mysqli_error($conn));

            if($sql)
            {
                header("location: contact.php?msg=itworks");
            }
            else
            {
                header("location: contact.php?msg=doesnotwork");
            }
        }
        else
        {
            echo "Fill in all fields!";
        }
    }   

?>