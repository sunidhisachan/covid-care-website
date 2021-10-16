<?php

include('authentication.php');
include('config/webconfig.php');

if(isset($_POST['addHospital'])) {
    $name = $_POST['hname'];
    $address = $_POST['addr'];
    $phone = $_POST['phone'];
    $oxygen_beds = $_POST['oxygen_beds'];
    $non_oxygen_beds = $_POST['non_oxygen_beds'];
    $icu_w_vent = $_POST['icu_w_vent'];
    $icu_wt_vent = $_POST['icu_wt_vent'];

    $query = "INSERT INTO hospital_details (h_name, address, phone_no, oxygen_beds, non_oxygen_beds, icu_w_vent, icu_wt_vent)
     VALUES ('$name','$address','$phone','$oxygen_beds','$non_oxygen_beds','$icu_w_vent','$icu_wt_vent') ";

    $query_run = mysqli_query($con, $query);

    if($query_run) {
        $_SESSION['status'] = "Hospital Added Successfully";
        header("location: hospital.php");
    } else {
        $_SESSION['status'] = "Hospital Details Could Not be Added";
        header("location: hospital.php");
    }
}

if(isset($_POST['updateHospital'])) {

    
    $name = $_POST['hname'];
    $address = $_POST['addr'];
    $phone = $_POST['phone'];
    $oxygen_beds = $_POST['oxygen_beds'];
    $non_oxygen_beds = $_POST['non_oxygen_beds'];
    $icu_w_vent = $_POST['icu_w_vent'];
    $icu_wt_vent = $_POST['icu_wt_vent'];
    $hospital_id = $_POST['hospital_id']; 

    $query = "UPDATE hospital_details SET h_name='$name', address='$address', phone_no='$phone', oxygen_beds='$oxygen_beds', non_oxygen_beds='$non_oxygen_beds', icu_w_vent='$icu_w_vent', icu_wt_vent='$icu_wt_vent' WHERE id = '$hospital_id' ";

    $query_run = mysqli_query($con, $query);

    if($query_run) {
        $_SESSION['status'] = "Hospital Details Updated Successfully";
        header("location: hospital.php");
    } else {
        $_SESSION['status'] = "Update Failed";
        header("location: hospital.php");
    }

}

if(isset($_POST['DeleteHospitalbtn'])) {
    $hospital_id= $_POST['delete_id'];

    $query = "DELETE FROM hospital_details WHERE ID= '$hospital_id' ";

    $query_run = mysqli_query($con, $query);

    if($query_run) {
        $_SESSION['status'] = "Hospital Details Deleted Successfully";
        header("location: hospital.php");
    } else {
        $_SESSION['status'] = "Deletion Failed";
        header("location: hospital.php");
    }

}

if(isset($_POST['check_hname'])) {

    $hname = $_POST['hname'];

    $check_hospital_name= "SELECT h_name FROM hospital_details WHERE h_name = '$hname' ";
    $check_hospital_name_run = mysqli_query($con, $check_hospital_name);

    if(mysqli_num_rows($check_hospital_name_run)>0) {
        echo "Hospital Name Already Exists.";    
    }
    else {
        echo "Hospital Name Available";
    }
}


//Medical Section


if(isset($_POST['addMedical'])) {
    $name = $_POST['mname'];
    $address = $_POST['addr'];
    $phone = $_POST['phone'];

    $query = "INSERT INTO medical_details (m_name, address, phone_no)
     VALUES ('$name','$address','$phone') ";

    $query_run = mysqli_query($con, $query);

    if($query_run) {
        $_SESSION['status'] = "Medical Details Added Successfully";
        header("location: medical.php");
    } else {
        $_SESSION['status'] = "Hospital Details Could Not be Added";
        header("location: medical.php");
    }
}

if(isset($_POST['updateMedical'])) {

    
    $name = $_POST['mname'];
    $address = $_POST['addr'];
    $phone = $_POST['phone'];
    $medical_id = $_POST['medical_id']; 

    $query = "UPDATE medical_details SET m_name='$name', address='$address', phone_no='$phone' WHERE id = '$medical_id' ";

    $query_run = mysqli_query($con, $query);

    if($query_run) {
        $_SESSION['status'] = "Medical Details Updated Successfully";
        header("location: medical.php");
    } else {
        $_SESSION['status'] = "Update Failed";
        header("location: medical.php");
    }

}

if(isset($_POST['DeleteMedicalbtn'])) {
    $medical_id= $_POST['delete_id'];

    $query = "DELETE FROM medical_details WHERE ID= '$medical_id' ";

    $query_run = mysqli_query($con, $query);

    if($query_run) {
        $_SESSION['status'] = "Medical Details Deleted Successfully";
        header("location: medical.php");
    } else {
        $_SESSION['status'] = "Deletion Failed";
        header("location: medical.php");
    }

}

if(isset($_POST['check_mname'])) {

    $mname = $_POST['mname'];

    $check_medical_name= "SELECT m_name FROM medical_details WHERE m_name = '$mname' ";
    $check_medical_name_run = mysqli_query($con, $check_medical_name);

    if(mysqli_num_rows($check_medical_name_run)>0) {
        echo "Medical Name Already Exists.";    
    }
    else {
        echo "Medical Name Available";
    }
}



?>