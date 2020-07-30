<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>

    </title>
    <link rel="stylesheet" type="text/css" href="footerstyle.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
  </head>
  <body>
    <?php
    include("connection.php");
    $query = "select * from contact";
    $data = mysqli_query($conn,$query);
    $total = mysqli_num_rows($data);

    if($total!=0)
    {
            ?>
            <table border="1" bgcolor="#66CCFF">
            <tr>
            <td>Name</td>
            <td>Mobile</td>
            <td>Email</td>
            <td>Subject</td>
            <td>message</td>
            </tr>

            <?php

            while($result = mysqli_fetch_assoc($data))
            {
             echo "<tr>
                       <td>".$result['Name']."</td>
                       <td>".$result['Mobile']."</td>
                       <td>".$result['Email']."</td>
                       <td>".$result['Subject']."</td>
                       <td>".$result['Message']."</td>

                    </tr>";
             }
    }
    else
    {
            echo"Table has no records";
    }

    ?>

    <footer class="footer-distributed">
    <div class="footer-left">
    <img src="image/logo.png">
    <h3>Online<span>Tourism Management</span></h3>
    <p class="footer-links">
    <a href="#">Home</a>
    |
    <a href="#">Gallery</a>
    |
    <a href="#">About</a>
    |
    <a href="#">Contact</a>
    </p>
    <p class="footer-company-name">© 2020 Online Tourism Management System Pvt. Ltd.</p>

    </div>

    <div class="footer-center">
    <div>
    <i class="fa fa-map-marker"></i>
    <p><span>B-18/114 Kalyani Nadia</span>
    West Bengal</p>
    </div>
    <div>
    <i class="fa fa-phone"></i>
    <p>+91 9830 28 2829</p>
    </div>
    <div>
    <i class="fa fa-envelope"></i>
    <p><a href="#">tirtha616@gmail.com</a></p>
    </div>
    </div>

    <div class="footer-right">
    <p class="footer-company-about">
    <span>About Online Tourism Management</span>
    Tourism means people travelling for fun. It includes activities such as sightseeing and camping. People who travel for fun are called "tourists". Places where many tourists stay are called "resorts".</p>
    <div class="footer-icons">
    <a href="#"><i class="fa fa-facebook"></i></a>
    <a href="#"><i class="fa fa-twitter"></i></a>
    <a href="#"><i class="fa fa-instagram"></i></a>
    <a href="#"><i class="fa fa-linkedin"></i></a>
    <a href="#"><i class="fa fa-youtube"></i></a>
    </div>
    </div>
    </footer>

  </body>
</html>
