<?php
   include_once 'header1.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Covid Stats</title>
    <link rel="stylesheet" href="css/tracker.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    <div class="container">
        <h1>Covid Tracker</h1>
        <h2>(Covid-19)</h2>
        <h3 id="date">Date Time</h3>

        <form autocomplete="off">
            <input type="text" name="src" id="srch" required list="countries" placeholder="Enter the name of country">
            <datalist id="countries">
                <option value="World">World</option>
            </datalist>
            <button type="">Search</button>
        </form>

        <h2 id="name-country">The World</h2>
        <div class="content">
            <div class="box confirmed">
                <p>confirmed</p>
                <h3>0</h3>
                <i class="fa fa-long-arrow-up">0</i>
            </div>
            <div class="box deaths">
                <p>deaths</p>
                <h3>0</h3>
                <i class="fa fa-long-arrow-up">0</i>
            </div>
            <div class="box recovered">
                <p>recovered</p>
                <h3>0</h3>
                <i class="fa fa-long-arrow-up">0</i>
            </div>
        </div>

        <div class="chart">

        </div>
    </div>

    <script src="script/tracker.js"></script>
</body>
</html>