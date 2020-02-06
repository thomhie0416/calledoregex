<!DOCTYPE html>
<html>
<head>
	<title>Regular Expression</title>

	<meta charset="utf-8">
	<title>Loginform</title>
	<link rel="stylesheet"  href="style.css">

</head>
<body>
	<div style="margin: 0;padding: 0;text-align: center; color:red;font-size: 20px;2"><br><br>
			<?php
	if(isset($_POST['submit']))
	{	
		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$repassword = $_POST['Confirmpassword'];
		$str = "/^[a-zA-Z\s]+$/";
		$regex = "/^(?=.*[a-z])(?=.*[A-Z])\S{6,20}$/";

		if (empty($fname) || empty($lname)) 
		{
			echo "Please fill the blank";
		}
		elseif(!preg_match($str, $fname))
		{
			echo "Please fill your First name only a string";
		}
		elseif (!preg_match($str, $lname)) 
		{
			echo "Please fill your Last name only a string";
		}
		elseif (!preg_match($regex, $password)) 
		{
			echo "Password must contain 1 lowercase and 1 Uppercase and 1 number with min=6 max=20 letters only without space.";
		}
		elseif ($password != $repassword) 
		{
			echo "Your Password is not match";
		}

		else
		{
			echo "Congratulations!!";
		}

	}

	?>

	</div>


	<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
		
		<img src="user.jpg" class="user"><br><br>

		<h2>Fill Up Here!</h2>
		

		<label>Firstname</label>
		<input type="text" name="fname">
		<label>Lastname</label>
		<input type="text" name="lname">
		<label>Email</label>
		<input type="email" name="email">
		<label>Password</label>
		<input type="password" name="password">
		<label>Confirm Password</label>
		<input type="password" name="Confirmpassword">
		<input type="submit" name="submit" value="Submit">


	</form>



</body>
</html>