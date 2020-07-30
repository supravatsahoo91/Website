<?php
include("connection.php");
error_reporting(0);
?>


<html>
  <head>
    <meta charset="utf-8">
    <title>
  </title>
  <link rel="stylesheet" type="text/css">

  <link rel="stylesheet" type="text/css" href="menustyle.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <link rel="stylesheet" type="text/css" href="register.css">
  <link href="https://fonts.googleapis.com/css2?family=Balsamiq+Sans:ital,wght@1,700&family=Bungee&family=Dancing+Script:wght@700&family=Josefin+Sans:ital,wght@1,600&display=swap" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="footerstyle.css">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
  <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">

  <link rel="stylesheet" type="text/css" href="iconstyle.css">
<link rel="stylesheet" type="text/css" href="textstyle.css">

  </head>
  <body>
    <div class="texteffect">
<span class="text1" data-text1="Online Tourism Management System">Online Tourism Management System</span>
<span class="gradient"></span>
<span class="spotlight"></span>
</div>

<div class="icons">
<a href="#" class="facebook">facebook <i class="fa fa-facebook-f"></i></a>
<a href="#" class="youtube">youtube <i class="fa fa-youtube"></i></a>
<a href="#" class="twitter">twitter <i class="fa fa-twitter"></i></a>
</div>
    <div class="menu-bar">
      <ul>
        <li><a href="tour.php"><i class="fa fa-home" aria-hidden="true"></i>&nbsp;Home</a></li>
        <li><a href="aboutus.php"><i class="fa fa-user" aria-hidden="true"></i>&nbsp;About Us</a>
          <div class="sub-menu-1">
            <ul>
              <li><a href="mission.php">Mission</a></li>
              <li><a href="vision.php">Vision</a></li>
              <li class="hover-me"><a href="#">Team</a><i class="fa fa-angle-right" aria-hidden="true"></i>
                <div class="sub-menu-2">
                  <ul>
                    <li><a href="team1.php">Team 1</a></li>
                    <li><a href="team2.php">Team 2</a></li>
                    <li><a href="team3.php">Team 3</a></li>
                  </ul>
                </div>
              </li>
            </ul>
           </div>
        </li>
        <li><a href="services.php"><i class="fa fa-wrench" aria-hidden="true"></i>&nbsp;Services</a></li>
        <li><a href="#"><i class="fa fa-picture-o" aria-hidden="true"></i>&nbsp;Gallery</a>
        <div class="sub-menu-1">
            <ul>
              <li><a href="gallery1.php">Gallery1</a></li>
              <li><a href="gallery2.php">Gallery2</a></li>
              <li><a href="gallery3.php">Gallery3</a></li>
            </ul>
           </div>
        </li>
        <li><a href="booking.php"><i class="fa fa-sort" aria-hidden="true"></i>&nbsp;Booking</a></li>
        <li class="active"><a href="register.php"><i class="fa fa-sign-out" aria-hidden="true"></i>&nbsp;Register</a></li>
        <li><a href="login.php"><i class="fa fa-sign-in" aria-hidden="true"></i>&nbsp;Login</a></li>
        <li><a href="contact.php"><i class="fa fa-phone" aria-hidden="true"></i>&nbsp;Contact</a></li>



      </ul>
    </div>

    <div class="mycontactstyle">
<h1>Register with Us</h1>
<p>We would love to respond to your queries and help you. Feel free to get in touch with us. </p>

<div class="contact-box">
<div class="contact-left">
<h3>Send your request</h3>

<form action="" method="get">

<div class="input-row">
<div class="input-group">
<label>Userid</label>
<input type="text" placeholder="Enter your userid" name="userid">
</div>

<div class="input-group">
<label>Name</label>
<input type="text" placeholder="Enter your Name" name="uname">
</div>
</div>
<div class="input-row">
<div class="input-group">
<label>Mobile</label>
<input type="text" placeholder="Enter your mobile no" name="mobile_no">
</div>
<div class="input-group">
<label>Email</label>
<input type="text" placeholder="Enter your email" name="email">
</div>
</div>
<div class="input-row">
<div class="input-group">
<label>Password</label>
<input type="text" placeholder="Enter your password" name="password">
</div>
<div class="input-group">
<label>Dob</label>
<input type="text" placeholder="Enter your DateOfbirth" name="dob">
</div>
</div>
<label>Location</label>
<input type="text" placeholder="Enter your location" name="location">

<input type="submit" class="mybutton" name="submit" value="SEND">
</form>

<?php

if($_GET['submit'])
{

          $ui = $_GET['userid'];
          $un = $_GET['uname'];
          $mn = $_GET['mobile_no'];
          $em = $_GET['email'];
          $ps = $_GET['password'];
          $dob = $_GET['dob'];
          $lc = $_GET['location'];




          if($ui!="" && $un!="" && $mn!="" && $em!="" && $ps!=""  && $dob!=""  && $lc!="")
          {

                 $query = "insert into registerdb (userid,uname,mobile_no,email,location,password,dob) values('$ui','$un','$mn','$em','$lc','$ps','$dob')";
                 $data = mysqli_query($conn,$query);

                 if($data)
                 {
                        echo "Data insert into database";
                  }
                  else
                  {
                        echo "Data cannot insert database";
                   }

             }



           else
            {
                    echo" Atleast inseart UserId";
             }

    }
?>


</form>

</div>
<div class="contact-right">
<img src="img/JAISALMER1.jpg" height="100%" width="100%">

</div>
</div>

</div>


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
<p><span>72/A, Khelat Babu Lane</span>
West Bengal</p>
</div>
<div>
<i class="fa fa-phone"></i>
<p>+91 9748 96 5440</p>
</div>
<div>
<i class="fa fa-envelope"></i>
<p><a href="#">supravatsahoo91@gmail.com</a></p>
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
