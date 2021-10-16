<?php
    include_once 'header1.php';
    include 'config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medical</title>
    <link rel="stylesheet" href="css/medical.css">
      <style>
            .notice {
            margin: 0px 10px 0px 10px;
            padding: 5px 20px 5px 1px;
            min-height: 40px;
            max-height: 65px;
            min-width: 600px;
            border: 1px solid #ddd;
            border-radius: 4px;
            align-items:center;
            background-color: #f4f4f4;
        }
            .notice p {
            margin: 0px 0px 0px 10px;
            padding: 0px 12px 0px 0px;
            font-size: 14px;
            color: red;
            text-align: center;
        }

        small {
            margin-left: 55px;
        }
        
     </style>
</head>
<body>
<h1 align="center">List of Medicals</h1>
<div class="notice">
    <p align="center">We try our best to provide you the real time authentic data, but sometimes accuracy data may vary. We urge you to verify the data provided with the concerned hospital/medical shop.</p>
</div><br><br>
<table class="rwd-table">
<?php include_once 'filter.php'; ?><br><br><br>
  <tr>
    <th>Medical Id</th>
    <th>Name</th>
    <th>Address</th>
    <th>Phone no</th>
  </tr>
  <?php

        $sql="SELECT * FROM medical_details";
        $result=$conn->query($sql);
        while($row=$result->fetch_assoc()){
  ?>
  <tr>
    <td data-th="Medical Id"><?=$row['ID']?></td>
    <td data-th="Name"><?=$row['m_name']?></td>
    <td data-th="Address"><?=$row['address']?></td>
    <td data-th="Phone no"><?=$row['phone_no']?></td>
  </tr>
  <?php } ?>
</table>
</body>
</html>