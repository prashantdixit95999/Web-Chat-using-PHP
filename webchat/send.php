<?php
session_start();
include 'dbh.php';
$msg=$_POST['msg'];
$name=$_SESSION['name'];
$q="insert into posts(msg,name) values('$msg','$name')";
$result=mysqli_query($conn,$q);

header("location:home.php");

?>