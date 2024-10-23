<?php
$servername="localhost";
$uname="root";
$pass="";
$dbname="login";

$con=mysqli_connect($servername,$uname,$pass,$dbname);
if (!$con)
{
   die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully....";

?>
 