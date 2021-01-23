<!DOCTYPE html>
<html>
<head>
	<title>Login/Register</title>
	  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<h2>Login Here</h2>
	<form action="validation.php" method="post">
		<input type="text" name="email" placeholder="Enter your email"><br/><br/>
		<input type="text" name="password" placeholder="Enter your password"><br/><br/>
		<input type="submit" name="" value="Login">
	</form>

	<h2>Register Here</h2>
	<form action="registration.php" method="post">
		<input type="text" name="name" placeholder="Enter your Name"><br/><br/>
		<input type="text" name="email" placeholder="Enter your Email"><br/><br/>
		<input type="text" name="password" placeholder="Enter your Password"><br/><br/>
		<input type="submit" name="" value="Register">
	</form>
</body>
</html>