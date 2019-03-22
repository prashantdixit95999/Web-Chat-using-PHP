<?php
include 'dbh.php';
$uname=$_POST['uname'];
$pass=$_POST['pass'];
$email=$_POST['Email'];
$q="insert into signup(username,email,password) values('$uname','$email','$pass')";
$result=mysqli_query($conn,$q);

header("location:index.php");

?>