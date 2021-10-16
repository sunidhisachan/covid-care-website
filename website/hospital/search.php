<?php
    include_once 'header1.php';
?>

<head>
    <link rel="stylesheet" href="header.css">
</head>
<body>
    <h1 align="center">List of Medicals</h1>
    <div class="notice">
        <p align="center">We try our best to provide you the real time authentic data, but sometimes accuracy data may vary. We urge you to verify the data provided with the concerned hospital/medical shop.</p>
    </div>
</body>

<?php
    include 'filter.php';

    if(isset($_POST['submit']))
    {
        $search = $_POST['search'];
        $sql = "SELECT * FROM hospital_details WHERE ID LIKE '%$search%' OR h_name LIKE '%$search%' OR address LIKE '%$search%' OR phone_no LIKE '%$search%' OR oxygen_beds LIKE '%$search%' OR non_oxygen_beds LIKE '%$search%' OR icu_w_vent LIKE '%$search%' OR icu_wt_vent LIKE '%$search%'";

        $result = mysqli_query($conn, $sql);
        $queryResults = mysqli_num_rows($result);

        if($queryResults > 0)
        {
            while($row = mysqli_fetch_assoc($result))
            {
                echo "<br><table class='rwd-table'>
                            <tr>
                                <th>Sr no</th>
                                <th>Hospital Name</th>
                                <th>Hospital Address</th>
                                <th>Phone no</th>
                                <th>Beds with oxygen</th>
                                <th>Beds without oxygen</th>
                                <th>Beds with ventilator</th>
                                <th>Beds without ventilator</th>
                            </tr>
                            <tr>
                                <td data-th='Hospital Id'>".$row['ID']."</td>
                                <td data-th='Name'>".$row['h_name']."</td>
                                <td data-th='Address'>".$row['address']."</td>
                                <td data-th='Phone no'>".$row['phone_no']."</td>
                                <td data-th='Beds with oxygen'>".$row['oxygen_beds']."</td>
                                <td data-th='Beds without oxygen'>".$row['non_oxygen_beds']."</td>
                                <td data-th='Beds with ventilator'>".$row['icu_w_vent']."</td>
                                <td data-th='Beds without ventilator'>".$row['icu_wt_vent']."</td>
                            </tr>
                          </table>";
            }
        }
        else
        {
            echo "There are no results matching your search!";
        }
    }
?>
