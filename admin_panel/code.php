<?php

include('authentication.php');
include('config/config.php');

if(isset($_POST['logout_btn'])) {

    //session_destroy();
    unset($_SESSION['auth']);
    unset($_SESSION['auth_user']);

    $_SESSION['status'] = "Logged Out Successfully";
    header('location: login.php');
    exit(0);
}


if(isset($_POST['check_Emailbtn'])) {

    $email = $_POST['email'];

    $checkemail= "SELECT email FROM users WHERE email = '$email' ";
    $checkemail_run = mysqli_query($con, $checkemail);

    if(mysqli_num_rows($checkemail_run)>0) {
        echo "Email Id Already Exists.";    
    }
    else {
        echo "Email ID Available";
    }
}

if(isset($_POST['addUser'])) {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $role = $_POST['role'];
    $password = $_POST['password'];
    $confirmpassword = $_POST['confirmpassword'];

    if($password == $confirmpassword) {

        $checkemail= "SELECT email FROM users WHERE email = '$email' ";

        $checkemail_run = mysqli_query($con, $checkemail);

        if(mysqli_num_rows($checkemail_run)>0) {
            //Already Exists
            $_SESSION['status'] = "Email ID Already Exists";
            header("location: register.php");
            exit;
        }
        else {
            $user_query = "INSERT INTO users (name,phone,email,role,password) VALUES ('$name','$phone','$email','$role','$password')";

            $user_query_run = mysqli_query($con, $user_query);

            if($user_query_run) {
                $_SESSION['status'] = "User Added Successfully";
                header("location: register.php");
            } else {
                $_SESSION['status'] = "User Registration Failed";
                header("location: register.php");
            }
        }
    }
    else {
        $_SESSION['status'] = "Password & Confirm Password does not match";
        header("location: register.php");
    }
}


if(isset($_POST['updateUser'])) {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $role = $_POST['role'];
    $password = $_POST['password']; 
    $user_id = $_POST['user_id'];  

    $query = "UPDATE users SET name='$name', phone='$phone', email='$email', role='$role', password='$password' WHERE id = '$user_id' ";

    $query_run = mysqli_query($con, $query);

    if($query_run) {
        $_SESSION['status'] = "User Details Updated Successfully";
        header("location: register.php");
    } else {
        $_SESSION['status'] = "Update Failed";
        header("location: register.php");
    }
}

if(isset($_POST['DeleteUserbtn'])) {
    $user_id= $_POST['delete_id'];

    $query = "DELETE FROM users WHERE id= '$user_id' ";

    $query_run = mysqli_query($con, $query);

    if($query_run) {
        $_SESSION['status'] = "User Deleted Successfully";
        header("location: register.php");
    } else {
        $_SESSION['status'] = "Deletion Failed";
        header("location: register.php");
    }
}

?>