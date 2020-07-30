<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tourism";

$conn = mysqli_connect($servername,$username,$password,$dbname);
if($conn)
{
         echo "connection ok";
}
else
{
        die("record cannot delete because ".mysqli_connect_error());
}

?>
