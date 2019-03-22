<?php
session_start();
include 'dbh.php';
?>
<html>
<head>
<title>Home</title>
<link rel="stylesheet" type='text/css' href="home.css">
</head>
<body>
<div id='main'>
<h1 style="background-color:#6495ed;color:white;"><?php echo $_SESSION['name'] ?>--Online</h1>
	<div class='output'>
	<?php 
	$q="select * from posts";
	$result=mysqli_query($conn,$q);
	if($result->num_rows>0)
	{
		while($row=$result->fetch_assoc())
		{
		echo $row['name']," : ",$row['msg'];
		echo "</br>";
		}
	}
		else
		{
			echo "0 results";
		}
	
	$conn->close();
	
	?>
	</div>
	
<form method='post' action='send.php'>
<textarea name='msg' placeholder='Type here to Send Message' class='form-control'></textarea></br>
<input type='submit' value='Send'>
</form>
</br>
<form action='logout.php'>
<input style="width:100%;background-color:#6495ed;color:white;font-size:20px;" type='submit' value='Logout'>

</form>
</div>
</body>
</html>