<?php
$uname=$_POST['username'];
$password=$_POST['password'];

if($uname=='admin'&&$password=='123456')
{
    echo"<br> Hii!! $uname succsefully log in....";
}
else
{
    header('location:')
}
?>