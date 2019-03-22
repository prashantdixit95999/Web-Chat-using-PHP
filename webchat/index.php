<html>
<head>
<title>Sign in and Sign Up Page</title>
</head>
<link rel="stylesheet" type="text/css" href="style.css">
<body>
<div id='main'>
	<div id='info'>
		<h2>Login </h2>
		<form action='login.php' method='post'>
		<label><b>Username</b></label>
		<input autocomplete="off" type='text' name='uname' placeholder='Enter Username'>
		</br></br>
		<label><b>Password<b></label>
		<input autocomplete="off" type='pass' name='pass' placeholder='Enter Password'>
		</br></br>
		<button style="background-color:#6495ed;color:white;" type='submit'><b>Login</b>
		</button>
		
		 </form>
		 
		 <h2>SignUP Page</h2>
		<form action='signup.php' method='post'>
		<label><b>Username</b></label>
		<input autocomplete="off" type='text' name='uname' placeholder='Enter Username'>
		</br></br>
		<label><b>Email Id</b></label>
		<input autocomplete="off" type='email' name='Email' placeholder='Enter Email'>
		</br></br>
		
		<label><b>Password<b></label>
		<input autocomplete="off" type='pass' name='pass' placeholder='Enter Password'>
		</br></br>
		<button style="background-color:#6495ed;color:white;" type='submit'><b>Signup</b>
		</button>
		
		 </form>

	</div>
</div>
</body>
</html>