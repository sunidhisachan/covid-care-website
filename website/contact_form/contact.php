<?php
   include_once 'header1.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <form action="index.php" method="post">
    <section>
        <div class="container">
            <div class="contactInfo">
                <div>
                    <h2>Contact Info</h2>
                    <ul class="info">
                        <li>
                            <span><img src="image/location.png" alt=""></span>
                            <span>
                                112/4, New Road,
                                Pimpri, Pune,
                                411017
                            </span>
                        </li>
                        <li>
                            <span><img src="image/mail.png" alt=""></span>
                            <span>tyler@abc.com</span>
                        </li>
                        <li>
                            <span><img src="image/call.png" alt=""></span>
                            <span>987-654-3210</span>
                        </li>
                    </ul>
                </div>
                <ul class="sci">
                    <li><a href="#"><img src="image/Facebook.png" alt=""></a></li>
                    <li><a href="#"><img src="image/Twitter.png" alt=""></a></li>
                    <li><a href="#"><img src="image/Instagram.png" alt=""></a></li>
                    <li><a href="#"><img src="image/Pinterest.png" alt=""></a></li>
                    <li><a href="#"><img src="image/LinkedIn.png" alt=""></a></li>
                </ul>
            </div>

            <div class="contactForm">
                <h2>Contact Form</h2>
                <div class="formBox">
                    <div class="inputBox w50">
                        <input type="text" name="f_name" id="" required >
                        <span>First Name</span>
                    </div>
                    <div class="inputBox w50">
                        <input type="text" name="l_name" id="" required >
                        <span>Last Name</span>
                    </div>
                    <div class="inputBox w50">
                        <input type="text" name="email" id="" required >
                        <span>Email ID</span>
                    </div>
                    <div class="inputBox w50">
                        <input type="text" name="phone_no" id="" required >
                        <span>Contact Number</span>
                    </div>
                    <div class="inputBox w100">
                        <textarea name="message" id="" required></textarea>
                        <span>Write Your Message Here...</span>
                    </div>
                    <div class="inputBox w100">
                        <input type="submit" value="Submit" name="submit">
                    </div>
                </div>
            </div>
        </div>
    </section>
    </form>
</body>
</html>

<?php

    if(isset($_GET['msg']))
    {
        if($_GET['msg']== "itworks")
        {
            echo "<p>Form submitted successfully!</p>";
        }
        else
        {
            echo "<p>Something went wrong!</p>";
        }
    }

?>