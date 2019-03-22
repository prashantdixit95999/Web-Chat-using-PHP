<?php
session_start();
include 'dbh.php';
$uname=$_POST['uname'];
$pass=$_POST['Email'];
$email=$_POST['pass'];
$q="select * from signup where username='$uname' and password='$pass";
$result=mysqli_query($conn,$q);
$row=mysqli_num_rows($result);
if($row=='0')
{
	header("location:error.php");
}
else
{
	$_SESSION['name']=$_POST['uname'];
header("location:home.php");
}
?>