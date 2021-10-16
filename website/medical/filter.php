<?php 
    include 'config.php';   
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="medical.css">
    <style>
        
        form {
            margin-top: 100px;
        }

        input {
            padding: 6px;
            background: #fff;
            border:none;
            border-radius: 10px;
            box-shadow: inset 20px 20px 50px #e5e5e5,
                        inset -20px -20px 50px #ffffff;
        }
        button {
            padding: 6px;
            background: #009879;
            border:none;
            color: white;
            border-radius: 10px;
            box-shadow:  20px 20px 50px #bebebe,
                        -20px -20px 50px #ffffff;
        }
    </style>
</head>
<body>
    <form action="search.php" method="post">
        <input type="text" name="search" placeholder="Search">&nbsp;
        <button type="submit" name="submit">Search</button>
    </form>
</body>
</html>