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
        $sql = "SELECT * FROM medical_details WHERE ID LIKE '%$search%' OR m_name LIKE '%$search%' OR address LIKE '%$search%' OR phone_no LIKE '%$search%'";

        $result = mysqli_query($conn, $sql);
        $queryResults = mysqli_num_rows($result);

        if($queryResults > 0)
        {
            while($row = mysqli_fetch_assoc($result))
            {
                echo "<br><table class='rwd-table'>
                            <tr>
                                <th>Sr no</th>
                                <th>Medical Name</th>
                                <th>Medical Address</th>
                                <th>Phone no</th>
                            </tr>
                            <tr>
                                <td data-th='Medical Id'>".$row['ID']."</td>
                                <td data-th='Name'>".$row['m_name']."</td>
                                <td data-th='Address'>".$row['address']."</td>
                                <td data-th='Phone no'>".$row['phone_no']."</td>
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
